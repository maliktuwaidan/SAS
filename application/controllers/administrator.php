<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class administrator extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		// LOAD MODEL
		$this->load->model('login_model');
		$this->load->model('tabbed_model');
		
		// CHECK SESSION
		if(!$this->login_model->_check_user_session())
			redirect('login');
			
		$this->session->unset_userdata('SAS_ACTIVE_MODULE');
		$this->session->set_userdata('SAS_ACTIVE_MODULE', 'administrator');
	}
	
	var $data;
	
	public function index() {
		
		
		//LOAD LAYOUT VARIABLE
		$data['title'] = 'Sistem Akademik Sekolah - Login';
		$data['main'] = 'template/left_tab_container';
		$data['backend'] = $this->sas_constants->get_backend_attribute(array('javascript', 'css', 'layout_image'));
		
		//LOAD NAVIGATION VARIABLE
		
		//LOAD MAIN CONTENT VARIABLE
		$tableContent1 = $dataTable1 = array();
		array_push($tableContent1, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent1, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent1, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent1, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent1, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		
		
		$dataTable1['header'] = array('header 1','header 2','header 3', 'header 4', 'header 5', 'header 6');
		$dataTable1['content'] = $tableContent1;
		$dataTable1['id'] = 'dataTable_2';
		
		$tab = array();
		array_push($tab, array('Cari Berita','table_view', $dataTable1));
		array_push($tab, array('Tambah Berita','form_view', 'form_berita'));
							
		$tab_content = array();
		array_push($tab_content, array('Berita','tab_view', $tab));
		
		// SET JAVASCRIPT SESSION
		$this->session->set_userdata('JS_INIT', 'dataTable_1, dataTable_2, v_formBerita, v_formBerita2');
		
		$data['tab_content'] = $tab_content;
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/login.php */