<?php
//gig_model.php

class Gig_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	//saves gig to db, returns true if successful
	function SaveForm($form_data)
	{
		$this->db->insert('gig_table', $form_data);
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		return FALSE;
	}
	//Takes $limit for number of items and $start for 
	//a starting position in table, returns array of gigs
	public function get_gigs($limit, $start)
	{
		$query = $this->db->get('gig_table', $limit, $start);
		
		return $query;
	}
	//Returns single Gig based on id
	public function get_id($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('gig_table');
	}
}
?>