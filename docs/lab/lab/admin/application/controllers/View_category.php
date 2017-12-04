<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_category extends CI_Controller {

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
		$this->load->model('view_category_m');
		$data["fetch_details"] = $this->view_category_m->fetch_details();
		$this->load->view("view_category", $data);
	}
	public function delete_data()
	{
		$cat_id = $this->uri->segment(3);
		$this->load->model('view_category_m');
		$delete_data = $this->view_category_m->delete_cat($cat_id);
		if($delete_data){
			$this->session->set_flashdata("success", "Success , Your have successfully deleted this category!");
			redirect('view_category');
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('view_category');
		}
	}
}
