<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_service extends CI_Controller {

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
		$service_id = $this->uri->segment(3);
		$this->load->model('edit_service_m');
		$data['fetch_service'] = $this->edit_service_m->fetch_details($service_id);
		$data['fetch_data'] = $this->edit_service_m->fetch_cat();
		$this->load->view('edit_service',$data);
	}
	public function update_service()
	{
		$this->load->model('edit_service_m');
		$service_id = $this->input->post('service_id');
		$service_name = $this->input->post('service_name');
		$cat_id = $this->input->post('service_cat');
		$service_details = $this->input->post('servive_details');

		if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array('service_cat_id'=>$cat_id,'service_name'=> $service_name,'service_image'=> $image,'service_des'=> $service_details);
                }else{
                    $image = '';
					$records=array('service_cat_id'=>$cat_id,'service_name'=> $service_name,'service_des'=> $service_details);
                }
		}else{
			$records=array('service_cat_id'=>$cat_id,'service_name'=> $service_name,'service_des'=> $service_details);
		}

		$update_data = $this->edit_service_m->update_service($service_id,$records);
		if($update_data)
		{
			$this->session->set_flashdata("success", "Success , Your service updated successfully!");
			redirect('edit_service/fetch_data/'.$service_id);
		}else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('edit_service/fetch_data/'.$service_id);
		}
		
	}
}
