<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Add Service Category model class

*/

class Add_category_m extends CI_Model 
{
	public function insert_category($records)
	{
		$this->db->insert('service_cat', $records);
		return true;
	}

}
?>	