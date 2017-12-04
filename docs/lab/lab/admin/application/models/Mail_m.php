<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Fetching service category details in table

*/

class Mail_m extends CI_Model 
{
	public function fetch_details()
	{
		$query = $this->db->query("select * from feedback order by feedback_id desc");
		return $query;
	}
	public function delete_data($feedback_id)
	{
		$query = $this->db->query("delete from feedback where feedback_id='".$feedback_id."'");
		return true;
	}
}


?>