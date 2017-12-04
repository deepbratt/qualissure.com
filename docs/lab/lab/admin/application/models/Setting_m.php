<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Edit Slider Image details 

*/

class Setting_m extends CI_Model 
{
	public function fetch_details($admin_id)
	{
		$this->db->where("admin_id",$admin_id);
		$query = $this->db->get("admin");
		return $query;
	}
	public function update_admin($admin_id,$records)
	{
		$where  = array('admin_id' => $admin_id);
		$this->db->where($where);
		$query = $this->db->update('admin', $records);
		return true;
	}
}

?>