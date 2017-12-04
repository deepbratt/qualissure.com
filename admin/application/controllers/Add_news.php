<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_news extends CI_Controller {

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
		$this->load->view('add_news');
	}
	public function add_new()
	{
		$this->load->model('add_news_m');

		$news_name = $this->input->post('news_name');
		$news_details = $this->input->post('news_details');
		$date = time();

		if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array('news_name'=>$news_name,'news_description'=> $news_details,'news_image'=> $image,'date'=> $date);
                }else{
                    $image = '';
					$records=array('news_name'=>$news_name,'news_description'=> $news_details,'date'=> $date);
                }
		}else{
			$records=array('news_name'=>$news_name,'news_description'=> $news_details,'date'=> $date);
		}

		$insert_data = $this->add_news_m->insert_news($records);
		if($insert_data)
		{
			$this->session->set_flashdata("success", "News created successfully!");
			redirect('add_news');	
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('add_news');	
		}
	}
}
