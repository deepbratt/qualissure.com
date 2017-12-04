<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Fetching service category details in table

*/

class View_news_m extends CI_Model 
{
	public function fetch_details()
	{
		$query = $this->db->query("select * from news order by news_id desc");
		return $query;
	}
	public function delete_news($news_id)
	{
		$query = $this->db->query("delete from news where news_id='".$news_id."'");
		return true;
	}
}


?>