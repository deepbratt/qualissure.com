<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Fetching service category details in table

*/

class View_image_m extends CI_Model 
{
	public function fetch_images()
	{
		$query = $this->db->query("select * from home_page_slider order by 	id desc");
		return $query;
	}
	public function delete_slider($image_id)
	{
		$query = $this->db->query("delete from home_page_slider where id='".$image_id."'");
		return true;
	}
}


?>