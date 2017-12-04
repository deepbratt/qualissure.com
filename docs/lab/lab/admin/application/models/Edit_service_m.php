<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Edit service category details 

*/

class Edit_service_m extends CI_Model 
{
	public function fetch_details($service_id)
	{
		$query = $this->db->query("select * from service join service_cat where service.service_cat_id = service_cat.service_cat_id and service.service_id='".$service_id."'");
		return $query;
	}
	public function fetch_cat()
	{
		$query = $this->db->query("select * from service_cat");
		return $query;
	}
	public function update_service($service_id,$records)
	{
		$where  = array('service_id' => $service_id);
		$this->db->where($where);
		$query = $this->db->update('service', $records);
		return $query;
	}
}

?>