<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Edit service category details 

*/

class About_us_m extends CI_Model 
{
	public function fetch_details()
	{
		$this->db->where("1=1");
		$query = $this->db->get("about_us");
		return $query;
	}
	public function update_details($records)
	{
		$query = $this->db->update('about_us', $records);
		return $query;
	}
}

?>