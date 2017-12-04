<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Add service 

*/

class Add_service_m extends CI_Model 
{
	public function fetch_cat()
	{
		$query = $this->db->query("select * from service_cat");
		return $query;
	}
	public function insert_service($records)
	{
		$this->db->insert('service', $records);
		return true;
	}
}
?>