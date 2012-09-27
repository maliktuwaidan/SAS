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
	
	function _check_user($username, $password)
	{
		$this->db->where('login_user ', $username);
		$this->db->where('login_password', md5($password));
		$this->db->where('flag_aktif ', 1);
		$query = $this->db->get('pb_login');
		if ($query->num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}
	
}
/* End of file login_model.php */
/* Location: ./application/models/login_model.php */
