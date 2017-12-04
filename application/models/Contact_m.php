<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Home Page fetch

*/

class Contact_m extends CI_Model 
{
	public function add_data($records)
	{
		$this->db->insert('feedback', $records);
		return true;
	}
}
?>	