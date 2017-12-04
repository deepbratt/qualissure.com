<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Home Page fetch

*/

class Service_details_m extends CI_Model 
{
	public function fetch_serve($service_id)
	{
		$query = $this->db->query("select * from  service join service_cat where service.service_cat_id = service_cat.service_cat_id and service.	service_id='".$service_id."'");
		return $query->result();
	}
	public function fetch_related($service_id)
	{
		$query = $this->db->query("select * from  service join service_cat where service.service_cat_id = service_cat.service_cat_id and service.	service_id !='".$service_id."'");
		return $query->result();
	}
}
?>	