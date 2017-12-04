<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Edit certificate details 

*/

class Edit_news_m extends CI_Model 
{
	public function fetch_details($news_id)
	{
		$this->db->where("news_id",$news_id);
		$query = $this->db->get("news");
		return $query;
	}
	public function update_news($news_id,$records)
	{
		$where  = array('news_id' => $news_id);
		$this->db->where($where);
		$query = $this->db->update('news', $records);
		return $query;
	}
}

?>