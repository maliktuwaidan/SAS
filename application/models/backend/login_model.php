<?php

class login_model extends CI_Model {

	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();
	}
	
	var $data;

	function _login_validation()
	{
		$this->form_validation->set_rules('inputUser', 'inputUser', 'trim|required');
		$this->form_validation->set_rules('inputPassword', 'inputPassword', 'trim|required');
		return $this->form_validation->run();
	}
	
	function _check_user()
	{
		$this->db->where('SAS_USERNAME ', $this->input->post('inputUser'));
		$this->db->where('SAS_PASSWORD', md5($this->input->post('inputPassword')));
		$this->db->where('SAS_ACTIVE_FLAG ', 1);
		$query = $this->db->get('sas_user_login');
		if ($query->num_rows() != 0)
		{
			return true;
		}
		else
		{
			return FALSE;
		}
	}
	
}
/* End of file login_model.php */
/* Location: ./application/models/login_model.php */
