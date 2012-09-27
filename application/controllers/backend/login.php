<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->library('sas_constants');
		$data['backend'] = $this->sas_constants->get_backend_attribute(array('javascript', 'css'));
	}
	
	var $data;
	
	public function index()
	{
		$data['main'] = 'login';
		
		$this->load->view('backend/template', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/login.php */