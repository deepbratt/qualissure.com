<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_service extends CI_Controller {

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
		$this->load->model('view_service_m');
		$data["fetch_service"] = $this->view_service_m->fetch_details();
		$this->load->view("view_service", $data);
	}
	public function delete_data()
	{
		$service_id = $this->uri->segment(3);
		$this->load->model('view_service_m');
		$delete_data = $this->view_service_m->delete_service($service_id);
		if($delete_data){
			$this->session->set_flashdata("success", "Success , Your have successfully deleted this service!");
			redirect('view_service');
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('view_service');
		}
	}
}
