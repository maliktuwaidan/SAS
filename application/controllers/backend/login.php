<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		//LOAD LIBRARY
		$this->load->library(array('sas_constants', 'form_validation'));
		
		// LOAD MODEL
		$this->load->model('backend/login_model');
		
		//LOAD VARIABLE
		$data['title'] = 'Sistem Akademik Sekolah - Login';
		$data['main'] = 'backend/form/login';
		$data['backend'] = $this->sas_constants->get_backend_attribute(array('javascript', 'css', 'layout_image'));
		
		if($_POST)
			if($this->login_model->_login_validation())
				if($this->login_model->_check_user()){
					redirect('login/berhasil');
				}else{
					$data['validation_error'] = 'Username / Password anda salah, harap ulangi proses.';
				}
				
		$this->load->vars($data);
	}
	
	var $data;
	
	public function index() {
		
		$this->load->view('backend/template');
	}
	
	function test() {
		$time = getdate();
		echo 'SAS-'.$time['seconds'].$time['minutes'].$time['hours'].'-'.$time['mday'].$time['mon'].'-'.$time['year'];
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/login.php */