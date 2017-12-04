<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_details extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function fetch_service()
	{
		$this->load->model('service_details_m');
		$service_id = $this->uri->segment(3);
		$data['service_data'] = $this->service_details_m->fetch_serve($service_id);
		$data['related'] = $this->service_details_m->fetch_related($service_id);
		$this->load->view('service_details',$data);
	}
}
