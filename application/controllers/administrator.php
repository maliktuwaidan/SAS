<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class administrator extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		// LOAD MODEL
		$this->load->model('login_model');
		$this->load->model('berita_model');
		
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
		
		//LOAD MAIN CONTENT VARIABLE======================================================================================
		
		//LOAD INIT DATA FOR BERITA
		$dataTableBerita = array();
		$dataTableBerita['header'] = array('Judul Berita', 'Tag Berita', 'Flag Publish', 'Update Terakhir', '', '');
		$dataTableBerita['content'] = $this->berita_model->get_all_admin_berita();
		$dataTableBerita['id'] = 'dataTable_1';
		//print_r($dataTableBerita);
		$tab = array();
		array_push($tab, array('Cari Berita','table_view', $dataTableBerita, 'table/admin_berita_table'));
		array_push($tab, array('Tambah Berita','form_view', array('formAction' => 'ajax_service/berita_insert', 'addClass' => 'ajaxFormInsert'), 'form/form_berita'));
		
		// SETING TAB
		$tab_content = array();
		array_push($tab_content, array('Berita','tab_view', $tab, 'tab/admin_berita_tab'));
		
		// SET JAVASCRIPT SESSION
		$this->session->set_userdata('JS_INIT', 'dataTable_1, v_formBerita, ajaxFormInsert, ajaxTableDelete');
		
		
		$data['tab_content'] = $tab_content;
		$this->load->vars($data);
		$this->load->view('template');
	}
	
	function berita(){
		if(!$this->uri->segment(3))
			redirect($this->uri->segment(1));
		
		//GET BERITA DATA
		$rawData = $this->berita_model->get_berita_by_id();
			
		//LOAD LAYOUT VARIABLE
		$data['title'] = 'Sistem Akademik Sekolah - Ubah Berita';
		$data['main'] = 'template/form_container';
		$data['backend'] = $this->sas_constants->get_backend_attribute(array('javascript', 'css', 'layout_image'));
		$data['row'] = array('Update Berita', 'form/form_admin_berita_update', array('formAction' => 'ajax_service/berita_update', 'addClass' => 'ajaxFormUpdate'), $rawData);
		
		// SET JAVASCRIPT SESSION
		$this->session->set_userdata('JS_INIT', 'v_formBerita, ajaxFormUpdate');
		
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/login.php */