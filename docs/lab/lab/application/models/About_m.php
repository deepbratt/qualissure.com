<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Home Page fetch

*/

class About_m extends CI_Model 
{
	public function fetch_about()
	{
		$query = $this->db->query("select * from  about_us");
		return $query->result();
	}

}
?>	