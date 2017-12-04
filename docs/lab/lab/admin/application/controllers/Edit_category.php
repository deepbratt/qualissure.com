<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_category extends CI_Controller {

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
		$cat_id = $this->uri->segment(3);
		$this->load->model('edit_category_m');
		$data["cat_data"] = $this->edit_category_m->fetch_details($cat_id);
		$this->load->view('edit_category',$data);
	}
	public function update_cat()
	{
		$this->load->model('edit_category_m');
		$cat_id = $this->input->post('cat_id');
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

		$update_data = $this->edit_category_m->update_cat($cat_id,$records);
		if($update_data)
		{
			$this->session->set_flashdata("success", "Success , Your service category updated successfully!");
			redirect('edit_category/fetch_data/'.$cat_id);
		}else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('edit_category/fetch_data/'.$cat_id);
		}
		
	}
}
