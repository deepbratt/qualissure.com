<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Home Page fetch

*/

class News_details_m extends CI_Model 
{
	public function fetch_new($news_id)
	{
		$query = $this->db->query("select * from news where news_id='".$news_id."'");
		return $query->result();
	}
	public function fetch_related($news_id)
	{
		$query = $this->db->query("select * from  news where news_id !='".$news_id."'");
		return $query->result();
	}
}
?>	