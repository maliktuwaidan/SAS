<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class administrasi extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		// LOAD MODEL
		$this->load->model('login_model');
		
		// CHECK SESSION
		if(!$this->login_model->_check_user_session())
			redirect('login');
			
		$this->session->unset_userdata('SAS_ACTIVE_MODULE');
		$this->session->set_userdata('SAS_ACTIVE_MODULE', 'administrasi');
	}
	
	var $data;
	
	public function index() {
		
		
		//LOAD LAYOUT VARIABLE
		$data['title'] = 'Sistem Akademik Sekolah - Login';
		$data['main'] = 'template/berita_container';
		$data['backend'] = $this->sas_constants->get_backend_attribute(array('javascript', 'css', 'layout_image'));
		
		//LOAD NAVIGATION VARIABLE
		
		//LOAD MAIN CONTENT VARIABLE
		
				
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/login.php */