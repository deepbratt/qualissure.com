<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_certificate extends CI_Controller {

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
	public function index()
	{
		$this->load->model('view_certificate_m');
		$data["fetch_details"] = $this->view_certificate_m->fetch_details();
		$this->load->view("view_certificate",$data);
	}
	public function delete_data()
	{
		$cert_id = $this->uri->segment(3);
		$this->load->model('view_certificate_m');
		$delete_data = $this->view_certificate_m->delete_cert($cert_id);
		if($delete_data){
			$this->session->set_flashdata("success", "Success , Your have successfully deleted this certificate!");
			redirect('view_certificate');
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('view_certificate');
		}
	}
}
