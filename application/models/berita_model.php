<?php

class berita_model extends CI_Model {

	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();
	}
	
	function get_all_active_berita()
	{
		$this->db->select('SAS_BERITA_TITLE, SAS_BERITA_CONTENT, SAS_ADDED_BY, SAS_ADDED_DATE, SAS_BERITA_TAG');
		$this->db->where('SAS_ACTIVE_FLAG ', 1);
		$query = $this->db->get('sas_berita');
		if ($query->num_rows() != 0)
		{
			return $query->result_array();
		}
		else
		{
			return FALSE;
		}
	}
	
	
	
}
/* End of file berita_model.php */
/* Location: ./application/models/berita_model.php */
