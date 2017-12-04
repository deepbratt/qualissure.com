<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Edit service category details 

*/

class Edit_category_m extends CI_Model 
{
	public function fetch_details($cat_id)
	{
		/*$condition = "service_cat_id='".$cat_id."'";
		$this->db->select('*');
		$this->db->from('service_cat');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();*/
		$this->db->where("service_cat_id",$cat_id);
		$query = $this->db->get("service_cat");
		return $query;
	}
	public function update_cat($cat_id,$records)
	{
		$where  = array('service_cat_id' => $cat_id);
		$this->db->where($where);
		$query = $this->db->update('service_cat', $records);
		return $query;
	}
}

?>