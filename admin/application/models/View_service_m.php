<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Fetching service details in table

*/

class View_service_m extends CI_Model 
{
	public function fetch_details()
	{
		$query = $this->db->query("select * from service join service_cat where service.service_cat_id = service_cat.service_cat_id order by service.service_id desc");
		return $query;
	}
	public function delete_service($service_id)
	{
		$query = $this->db->query("delete from service where service_id='".$service_id."'");
		return true;
	}
}


?>