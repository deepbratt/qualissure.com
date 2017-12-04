<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Edit certificate details 

*/

class Edit_certificate_m extends CI_Model 
{
	public function fetch_details($cert_id)
	{
		$this->db->where("certificate_id",$cert_id);
		$query = $this->db->get("certificate");
		return $query;
	}
	public function update_cert($cert_id,$records)
	{
		$where  = array('certificate_id' => $cert_id);
		$this->db->where($where);
		$query = $this->db->update('certificate', $records);
		return $query;
	}
}

?>