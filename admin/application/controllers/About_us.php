<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

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
		$this->load->model('about_us_m');
		$data['fetch_data'] = $this->about_us_m->fetch_details();
		$this->load->view('about_us',$data);
	}
	public function update_details()
	{
		$this->load->model('about_us_m');
		$about_us_details = $this->input->post('about_us_details');

		if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array('about_us_details'=>$about_us_details,'about_us_image'=> $image);
                }else{
                    $image = '';
					$records=array('about_us_details'=>$about_us_details);
                }
		}else{
			$records=array('about_us_details'=>$about_us_details);
		}

		$update_data = $this->about_us_m->update_details($records);
		if($update_data)
		{
			$this->session->set_flashdata("success", "Success , About us details updated successfully!");
			redirect('about_us');
		}else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('about_us');
		}
		
	}
}
