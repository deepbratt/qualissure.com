<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_details extends CI_Controller {

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
	public function fetch_news()
	{
		$this->load->model('news_details_m');
		$news_id = $this->uri->segment(3);
		$data['news_data'] = $this->news_details_m->fetch_new($news_id);
		$data['related'] = $this->news_details_m->fetch_related($news_id);
		$this->load->view('news_details',$data);
	}
}