<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Home Page fetch

*/

class Home_m extends CI_Model 
{
	public function fetch_slider()
	{
		$query = $this->db->query("select * from  home_page_slider");
		return $query;
	}
	public function fetch_about()
	{
		$query = $this->db->query("select * from  about_us");
		return $query;
	}
	public function fetch_service()
	{
		$query = $this->db->query("select * from  service limit 3");
		return $query;
	}

}
?>	