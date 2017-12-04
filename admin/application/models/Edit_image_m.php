<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Edit Slider Image details 

*/

class Edit_image_m extends CI_Model 
{
	public function fetch_details($image_id)
	{
		$this->db->where("id",$image_id);
		$query = $this->db->get("home_page_slider");
		return $query;
	}
	public function update_details($image_id,$records)
	{
		$where  = array('id' => $image_id);
		$this->db->where($where);
		$query = $this->db->update('home_page_slider', $records);
		return $query;
	}
}

?>