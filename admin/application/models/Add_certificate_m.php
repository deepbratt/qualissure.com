<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Add Certificate Category model class

*/

class Add_certificate_m extends CI_Model 
{
	public function insert_certificate($records)
	{
		$this->db->insert('certificate', $records);
		return true;
	}

}
?>	