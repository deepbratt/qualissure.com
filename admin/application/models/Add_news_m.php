<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Add Certificate Category model class

*/

class Add_news_m extends CI_Model 
{
	public function insert_news($records)
	{
		$this->db->insert('news', $records);
		return true;
	}

}
?>	