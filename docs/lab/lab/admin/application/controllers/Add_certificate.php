<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_certificate extends CI_Controller {

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
	public function index()
	{
		$this->load->view('add_certificate');
	}
	public function add_new()
	{
		$this->load->model('add_certificate_m');

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

		$insert_data = $this->add_certificate_m->insert_certificate($records);
		if($insert_data)
		{
			$this->session->set_flashdata("success", "Certificate created successfully!");
			redirect('add_certificate');	
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('add_certificate');	
		}
	}
}
