<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Fetching service category details in table

*/

class View_category_m extends CI_Model 
{
	public function fetch_details()
	{
		
		/*$condition = "1 order by service_cat_id desc";
		$this->db->select('*');
		$this->db->from('service_cat');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();*/
		$query = $this->db->query("select * from service_cat order by service_cat_id desc");
		return $query;

	}
	public function delete_cat($cat_id)
	{
		
		/*$condition = "1 order by service_cat_id desc";
		$this->db->select('*');
		$this->db->from('service_cat');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();*/
		$query = $this->db->query("delete from service_cat where service_cat_id='".$cat_id."'");
		return true;

	}
}


?>