<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Home Page fetch

*/

class News_m extends CI_Model 
{
	public function fetch_data()
	{
		$query = $this->db->query("select * from  news ");
		return $query->result();
	}
}
?>	