<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

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
		$this->load->model('setting_m');
		$admin_id = $this->session->userdata['logged_in']['admin_id'];
		$data['admin_details'] = $this->setting_m->fetch_details($admin_id);
		$this->load->view('setting',$data);
	}
	public function change_setting()
	{
		$this->load->model('setting_m');
		$admin_id = $this->session->userdata['logged_in']['admin_id'];
		$username = $this->input->post('username');
		$pass1 = $this->input->post('pass_one');
		$pass2 = $this->input->post('pass_two');
		if($pass1 == $pass2)
		{
			$records=array('username'=>$username,'password'=>$pass1);
			$update_details = $this->setting_m->update_admin($admin_id,$records);
			if($update_details)
			{
				$this->session->set_flashdata("success", "Success , Your details updated successfully!");
				redirect('setting');
			}
			else{
				$this->session->set_flashdata("failed", "Something went wrong!");
				redirect('setting');
			}
		}
		else{
			$this->session->set_flashdata("pass_error", "Password doesn't match!");
			redirect('setting');
		}
	}
}
