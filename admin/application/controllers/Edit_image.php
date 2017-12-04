<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_image extends CI_Controller {

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
		$image_id = $this->uri->segment(3);
		$this->load->model('edit_image_m');
		$data["image_data"] = $this->edit_image_m->fetch_details($image_id);
		$this->load->view('edit_image',$data);
	}
	public function update_image()
	{
		$this->load->model('edit_image_m');
		$image_id = $this->input->post('image_id');
		$heading = $this->input->post('heading');

		if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array('image'=>$image,'heading'=> $heading);
                }else{
                    $image = '';
					$records=array('heading'=> $heading);
                }
		}else{
			$records=array('heading'=> $heading);
		}

		$update_data = $this->edit_image_m->update_details($image_id,$records);
		if($update_data)
		{
			$this->session->set_flashdata("success", "Success , Your slider image updated successfully!");
			redirect('edit_image/fetch_data/'.$image_id);
		}else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('edit_image/fetch_data/'.$image_id);
		}
		
	}
}
