<?php
//gig_model.php

class Gig_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	function SaveForm($form_data, $convertCategories)
	{
		/
		
		$categoryInsert = array();
		
		
			//for ($i=0;$i<count($categoryNames);$i++){
			//	$categoryInsert[$catgoryNames[$i]] = 0;
			//	$catgoryInsert[$categoryNames[$i]] = $convertCategories[$i];
			//}
			//
		
		$categoryInsert['art_work'] = $convertCategories[0];
		$categoryInsert['design'] = $convertCategories[1];
		$categoryInsert['web_development'] = $convertCategories[2];
		$categoryInsert['programming'] = $convertCategories[3];
		$categoryInsert['mobile'] = $convertCategories[4];
		$categoryInsert['front_end'] = $convertCategories[5];
		$categoryInsert['back_end'] = $convertCategories[6];
		
		
		
		
		$this->db->insert('gig_table', $form_data);
		$lastId = $this->db->insert_id();
		//if ($this->db->affected_rows() == '1')
		//{
		//	return TRUE;
		//}
		//return FALSE;
		$categoryInsert["gig"]= $lastId;
		$this->db->insert('categories_table', $categoryInsert);
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		return FALSE;
	}
}
?>


			
			