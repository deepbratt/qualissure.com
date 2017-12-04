<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_certificate extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/welcome
	 *	- or -
	 * 		http://example.com/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['admin_id']){
            redirect('login');
        }
    }
	public function fetch_data()
	{
		$cert_id = $this->uri->segment(3);
		$this->load->model('edit_certificate_m');
		$data["cert_data"] = $this->edit_certificate_m->fetch_details($cert_id);
		$this->load->view('edit_certificate',$data);
	}
	public function update_cert()
	{
		$this->load->model('edit_certificate_m');
		$cert_id = $this->input->post('cert_id');
		$cert_name = $this->input->post('cert_name');

		if(!empty($_FILES['cert']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['cert']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('cert')){
                    $uploadData = $this->upload->data();
					$cert_file = $uploadData['file_name'];
					$records=array('certificate_name'=>$cert_name,'certificate_file_name'=> $cert_file);
                }else{
                    $cert_file = '';
					$records=array('certificate_name'=>$cert_name);
                }
		}else{
			$records=array('certificate_name'=>$cert_name);
		}

		$update_data = $this->edit_certificate_m->update_cert($cert_id,$records);
		if($update_data)
		{
			$this->session->set_flashdata("success", "Success , Your certificate updated successfully!");
			redirect('edit_certificate/fetch_data/'.$cert_id);
		}else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('edit_certificate/fetch_data/'.$cert_id);
		}
		
	}
}
