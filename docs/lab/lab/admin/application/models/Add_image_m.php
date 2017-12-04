<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Add Home Page image

*/

class Add_image_m extends CI_Model 
{
	public function insert_image($records)
	{
		$this->db->insert('home_page_slider', $records);
		return true;
	}

}
?>	