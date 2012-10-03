<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class berita extends CI_Controller {
	
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
		$this->session->set_userdata('SAS_ACTIVE_MODULE', 'berita');
	}
	
	var $data;
	
	public function index() {
		
		
		//LOAD LAYOUT VARIABLE
		$data['title'] = 'Sistem Akademik Sekolah - Berita';
		$data['main'] = 'template/left_tab_container';
		$data['backend'] = $this->sas_constants->get_backend_attribute(array('javascript', 'css', 'layout_image'));
		
		//LOAD MAIN CONTENT VARIABLE
		$berita_data = $this->sas_utility->convert_array_keys_to_index($this->berita_model->get_all_active_berita());
		
		//SETING ACCORDION ====================================================================================
		//bentuk umum data untuk dimasukan ke accordion ('JUDUL', 'CONTENT', 'PEMBUAT', 'TANGGAL UPDATE', 'TAG')
		$accordion = $berita_data;
		
		//SETING TABLE ====================================================================================
		$dataTable['header'] = array('Judul Berita', 'Content', 'Posting Oleh', 'Terakhir Diupdate', 'Tag Posting');
		$dataTable['content'] = $berita_data;
		$dataTable['id'] = 'dataTable_1';
		
		// SETING JAVASCRIPT SESSION======================================================================
		$this->session->set_userdata('JS_INIT', 'dataTable_1');
		
		// FIRST LEVEL TAB SETUP
		$tab_content = array();
		array_push($tab_content, array('Berita Terbaru','accordion_view',  $accordion));
		array_push($tab_content, array('Cari Berita','table_view', $dataTable));
		
		$data['tab_content'] = $tab_content;
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/login.php */