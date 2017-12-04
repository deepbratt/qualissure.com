<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Fetching service category details in table

*/

class View_certificate_m extends CI_Model 
{
	public function fetch_details()
	{
		$query = $this->db->query("select * from certificate order by certificate_id desc");
		return $query;
	}
	public function delete_cert($cert_id)
	{
		$query = $this->db->query("delete from certificate where certificate_id='".$cert_id."'");
		return true;
	}
}


?>