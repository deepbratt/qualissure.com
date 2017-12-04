<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_news extends CI_Controller {

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
		$news_id = $this->uri->segment(3);
		$this->load->model('edit_news_m');
		$data["news_data"] = $this->edit_news_m->fetch_details($news_id);
		$this->load->view('edit_news',$data);
	}
	public function update_news()
	{
		$this->load->model('edit_news_m');
		$news_id = $this->input->post('news_id');
		$news_name = $this->input->post('news_name');
		$news_details = $this->input->post('news_details');

		if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array('news_name'=>$news_name,'news_description'=> $news_details,'news_image'=> $image);
                }else{
                    $image = '';
					$records=array('news_name'=>$news_name,'news_description'=> $news_details);
                }
		}else{
			$records=array('news_name'=>$news_name,'news_description'=> $news_details);
		}

		$update_data = $this->edit_news_m->update_news($news_id,$records);
		if($update_data)
		{
			$this->session->set_flashdata("success", "Success , Your News updated successfully!");
			redirect('edit_news/fetch_data/'.$news_id);
		}else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('edit_news/fetch_data/'.$news_id);
		}
		
	}
}
