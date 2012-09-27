<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->library('sas_constants');
		
	}
	
	var $data;
	
	public function index()
	{
		$data['title'] = 'Sistem Akademik Sekolah - Login';
		$data['main'] = 'backend/form/login';
		$data['backend'] = $this->sas_constants->get_backend_attribute(array('javascript', 'css', 'image'));
		$this->load->view('backend/template', $data);
	}
	
	function _user_validation()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		return $this->form_validation->run();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/login.php */