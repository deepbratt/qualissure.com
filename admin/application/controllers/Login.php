<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

	 /*function __construct()
	 {
	   parent::__construct();
	   $this->load->model('login_m','',TRUE);
	  }*/

	public function index()
	{
		$this->load->view('login');
	}
	public function login_check(){
		$this->load->model('login_m');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$records=array('username'=>$username,'password'=>$password);
		$result = $this->login_m->check_login($records);
		if($result){
			 $sess_array = array();
			 foreach($result as $row)
			 {
			   $sess_array = array(
				 'admin_id' => $row->admin_id,
			   );
			   $this->session->set_userdata('logged_in', $sess_array);
			 }
			//print_r($sess_array);
			 redirect('setting');
		}else{
			 $this->session->set_flashdata("failed", "Invalid username or password");
			 redirect('login');
		}
	}

}
