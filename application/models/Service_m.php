<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Home Page fetch

*/

class Service_m extends CI_Model 
{
	public function fetch_data($cat_id)
	{
		$query = $this->db->query("select * from  service where service_cat_id='".$cat_id."'");
		return $query->result();
	}
}
?>	