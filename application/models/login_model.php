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
	
	function _validate_user()
	{
		$this->db->select('SAS_USER_CODE, SAS_USER_NAME, SAS_WORKER_FLAG');
		$this->db->where('SAS_USERNAME ', $this->input->post('inputUser'));
		$this->db->where('SAS_PASSWORD', md5($this->input->post('inputPassword')));
		$this->db->where('SAS_ACTIVE_FLAG ', 1);
		$query = $this->db->get('sas_user_login');
		if ($query->num_rows() != 0)
		{
			$user_detail = $query->row_array();
			$this->_set_user_session($user_detail, $this->_get_user_privilege($user_detail));
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	function _get_user_privilege($user_detail)
	{
		$this->db->select('SAS_USER_RESPONSIBILITY');
		$this->db->where('SAS_USER_CODE ', $user_detail['SAS_USER_CODE']);
		$query = $this->db->get('sas_user_privilege');
		if ($query->num_rows() != 0)
		{
			return $query->result_array();
		}
		else
		{
			return FALSE;
		}
	}
	
	function _set_user_session($user_detail, $user_privilege)
	{
		$data['SAS_USER'] = array(
			'SAS_USERNAME' => $this->input->post('inputUser'),
			'SAS_USER_NAME' => $user_detail['SAS_USER_NAME'],
			'SAS_USER_CODE' => $user_detail['SAS_USER_CODE'],
			'SAS_WORKER_FLAG' => $user_detail['SAS_WORKER_FLAG'],
			'SAS_PRIVILEGE' => $user_privilege
		);
		$this->session->set_userdata($data);
	}
	
	function _check_user_session()
	{
		// CHECK IF THERE IS SESSION FLOATING RIGHT NOW
		if($this->session->userdata('SAS_USER') == TRUE) {
			$session = $this->session->userdata('SAS_USER');
			//CHECK IF SESSION COMPLETED
			if($session['SAS_USERNAME'] == TRUE AND $session['SAS_USER_NAME'] == TRUE AND $session['SAS_USER_CODE'] == TRUE AND $session['SAS_WORKER_FLAG'] == TRUE)
				return TRUE;
		}
		return FALSE;
	}
	
}
/* End of file login_model.php */
/* Location: ./application/models/login_model.php */
