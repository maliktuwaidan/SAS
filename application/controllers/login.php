<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		// LOAD MODEL
		$this->load->model('login_model');
		
		// CHECK SESSION
		if($this->login_model->_check_user_session())
			redirect('berita');
	}
	
	var $data;
	
	public function index() {
		
		
		//LOAD VARIABLE
		$data['title'] = 'Sistem Akademik Sekolah - Login';
		$data['main'] = 'template/login_view';
		$data['backend'] = $this->sas_constants->get_backend_attribute(array('javascript', 'css', 'layout_image'));
		
		if($_POST)
			if($this->login_model->_login_validation())
				if($this->login_model->_validate_user()){
					redirect('berita');
				}else{
					$data['validation_error'] = 'Username / Password anda salah, harap ulangi proses.';
				}
				
		$this->load->vars($data);
		$this->load->view('template');
	}
	
	function asd() { 
		echo 'HTTP_HOST : '.$_SERVER['HTTP_HOST'].'<br>';
		echo 'SERVER_NAME : '.$_SERVER['SERVER_NAME'].'<br>';
	}
		
	function sas() { $this->session->sess_destroy(); }
	
	function sas2() { print_r($this->session->userdata('SAS_USER')); }
}

/* End of file welcome.php */
/* Location: ./application/controllers/login.php */