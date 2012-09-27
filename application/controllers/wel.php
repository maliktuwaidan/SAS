<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class wel extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->library('sas_constants');
	}
	
	public function index()
	{
		print_r($this->sas_constants->get_path(array('images','javascript','css')));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */