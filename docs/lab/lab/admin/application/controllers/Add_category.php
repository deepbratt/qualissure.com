<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_category extends CI_Controller {

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
		$this->load->view('add_category');
	}
	public function add_new()
	{
		$this->load->model('add_category_m');

		$cat_name = $this->input->post('cat_name');

		if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array('service_cat_name'=>$cat_name,'service_cat_image'=> $image);
                }else{
                    $image = '';
					$records=array('service_cat_name'=>$cat_name);
                }
		}else{
			$records=array('service_cat_name'=>$cat_name);
		}

		$insert_data = $this->add_category_m->insert_category($records);
		if($insert_data)
		{
			$this->session->set_flashdata("success", "Service category created successfully!");
			redirect('add_category');	
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('add_category');	
		}
	}
}
