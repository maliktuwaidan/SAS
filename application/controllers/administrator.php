<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class administrator extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		// LOAD MODEL
		$this->load->model('login_model');
		$this->load->model('berita_model');
		$this->load->model('user_model');
		
		// CHECK SESSION
		if(!$this->login_model->_check_user_session())
			redirect('login');
			
		$this->session->unset_userdata('SAS_ACTIVE_MODULE');
		$this->session->set_userdata('SAS_ACTIVE_MODULE', 'administrator');
	}
	
	var $data;
	
	public function index() {
		
		// LOAD LAYOUT VARIABLE //
		$data['title'] = 'Sistem Akademik Sekolah - Administrator';
		$data['main'] = 'template/left_tab_container';
		$data['backend'] = $this->sas_constants->get_backend_attribute(array('javascript', 'css', 'layout_image'));
		
		// ==== BERITA MENU SETTING AND LOAD DATA ==== //
		$dataTableBerita = array();
		$dataTableBerita['header'] = array('Judul', 'Tag Berita', 'Flag Publish', 'Update Terakhir', '', '');
		$dataTableBerita['content'] = $this->berita_model->get_all_admin_berita();
		$dataTableBerita['id'] = 'dataTable_1';
		
		// ==== BERITA USER SETTING AND LOAD DATA ==== //
		$dataTableUser1 = $dataTableUser2 = array();
		$dataTableUser1['header'] = $dataTableUser1['header'] = array('Nama', 'Username', 'Update Terakhir', 'Update Oleh', '', '','');
		$dataTableUser1['content'] = $this->user_model->get_all_worker_user_login();
		$dataTableUser1['id'] = 'dataTable_2';
		$dataTableUser2['content'] = $this->user_model->get_all_non_worker_user_login();
		$dataTableUser2['id'] = 'dataTable_3';
		
		// ==== LEVEL 2 TAB MENU SETTING ==== //
		
		$tab_berita = array();	// LEVEL 2 BERITA TAB
		array_push($tab_berita, array('Daftar Berita','table_view', $dataTableBerita, 'table/admin_berita_table'));
		array_push($tab_berita, array('Tambah Berita','form_view', array('formAction' => 'ajax_service/berita_insert', 'addClass' => 'ajaxFormInsert'), 'form/form_berita'));
		
		$tab_user = array(); //LEVEL 2 USER TAB
		array_push($tab_user, array('Daftar Staff','table_view', $dataTableUser1, 'table/admin_user_table'));
		array_push($tab_user, array('Daftar Murid','table_view', $dataTableUser2, 'table/admin_user_table'));
		array_push($tab_berita, array('Tambah User','form_view', array('formAction' => 'ajax_service/berita_insert', 'addClass' => 'ajaxFormInsert'), 'form/form_user'));
		
		// ==== LAVEL 1 TAB MENU SETTING ==== //
		$tab_content = array();
		array_push($tab_content, array('Berita','tab_view', $tab_berita, 'tab/admin_user_tab'));
		array_push($tab_content, array('User','tab_view', $tab_user, 'tab/admin_user_tab'));
		
		// SET JAVASCRIPT SESSION //
		$this->session->set_userdata('JS_INIT', 'dataTable_1, dataTable_2, dataTable_3, v_formBerita, ajaxFormInsert, ajaxTableDelete');
		
		
		$data['tab_content'] = $tab_content;
		$this->load->vars($data);
		$this->load->view('template');
	}
	
	function berita() {
		if(!$this->uri->segment(3)) redirect($this->uri->segment(1));
		
		// GET BERITA DATA //
		$rawData = $this->berita_model->get_berita_by_id();
			
		// LOAD LAYOUT VARIABLE //
		$data['title'] = 'Sistem Akademik Sekolah - Ubah Berita';
		$data['main'] = 'template/form_container';
		$data['backend'] = $this->sas_constants->get_backend_attribute(array('javascript', 'css', 'layout_image'));
		$data['row'] = array('Update Berita', 'form/form_admin_berita_update', array('formAction' => 'ajax_service/berita_update', 'addClass' => 'ajaxFormUpdate'), $rawData);
		
		// SET JAVASCRIPT SESSION //
		$this->session->set_userdata('JS_INIT', 'v_formBerita, ajaxFormUpdate');
		
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/login.php */