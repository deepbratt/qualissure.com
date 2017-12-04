<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
	public function index()
	{
		$this->load->view('contact');
	}
	public function send_feedback()
	{
		$this->load->model('contact_m');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
		$date = time();
		$records = array('name'=>$name,'email'=>$email,'message'=>$message,'date'=>$date);
		$insert_data = $this->contact_m->add_data($records);
		if($insert_data)
		{
			$this->load->library('email');
			$this->email->to('sweezit92@gmail.com');
			$this->email->from($email,$name);
			$this->email->subject('Enquiry Mail');
			$this->email->message($message);
			$mail_send = $this->email->send();	
			if($mail_send)
			{
				$this->session->set_flashdata("success", "Thanks for reaching to us, We will get back to you soon!");
				redirect('contact');
			}
			else
			{
				$this->session->set_flashdata("failed", "Something went wrong!");
				redirect('contact');
			}
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('contact');	
		}
	}
}
