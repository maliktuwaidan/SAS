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
		
		$accordion = $accordion2 = array();
		array_push($accordion, array('title 1','content 1','creator 1', '00-00-0000', 'tag 11, tag 21, tag 31'));
		array_push($accordion, array('title 2','content 2','creator 2', '00-00-0000', 'tag 21, tag 22, tag 23'));
		array_push($accordion, array('title 3','content 3','creator 3', '00-00-0000', 'tag 31, tag 32'));
		array_push($accordion, array('title 4','content 4','creator 3', '00-00-0000', 'tag 31, tag 32'));
		array_push($accordion2, array('title 3','content 3','creator 3', '00-00-0000', 'tag 31, tag 32'));
		array_push($accordion2, array('title 4','content 4','creator 3', '00-00-0000', 'tag 31, tag 32'));
		
		$tableContent = $dataTable = $tableContent1 = $dataTable1 = array();
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent1, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent1, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent1, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent1, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent1, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		
		$dataTable['header'] = array('header 1','header 2','header 3', 'header 4', 'header 5', 'header 6');
		$dataTable['content'] = $tableContent;
		$dataTable['id'] = 'dataTable_1';
		$dataTable1['header'] = array('header 1','header 2','header 3', 'header 4', 'header 5', 'header 6');
		$dataTable1['content'] = $tableContent1;
		$dataTable1['id'] = 'dataTable_2';
		
		$tab = array();
		array_push($tab, array('Table','table_view', $dataTable1));
		array_push($tab, array('Accordion','accordion_view',  $accordion2));
		array_push($tab, array('Form','form_view', 'form_berita2'));
							
		$tab_content = array();
		array_push($tab_content, array('Table Preview','table_view', $dataTable));
		array_push($tab_content, array('Accordion Preview','accordion_view',  $accordion));
		array_push($tab_content, array('Form Preview','form_view', 'form_berita'));
		array_push($tab_content, array('Tab Preview','tab_view', $tab));
		
		// SET JAVASCRIPT SESSION
		$this->session->set_userdata('JS_INIT', 'dataTable_1, dataTable_2, v_formBerita, v_formBerita2');
		
		$data['tab_content'] = $tab_content;
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/login.php */