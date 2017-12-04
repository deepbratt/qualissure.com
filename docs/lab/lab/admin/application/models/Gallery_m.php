<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Add Certificate Category model class

*/

class Gallery_m extends CI_Model 
{
	public function insert_gallery($records)
	{
		$this->db->insert('galary', $records);
		return true;
	}

}
?>	