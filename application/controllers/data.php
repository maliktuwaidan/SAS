<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->library('sas_constants');
	}
	
	public function index()
	{
		// data for accordion
		$accordion = array();
		array_push($php_array, array('title 1','content 1','creator 1', '00-00-0000', 'tag 11, tag 21, tag 31'));
		array_push($php_array, array('title 2','content 2','creator 2', '00-00-0000', 'tag 21, tag 22, tag 23'));
		array_push($php_array, array('title 3','content 3','creator 3', '00-00-0000', 'tag 31, tag 32'));
		array_push($php_array, array('title 4','content 4','creator 3', '00-00-0000', 'tag 31, tag 32'));
		array_push($php_array, array('title 5','content 5','creator 3', '00-00-0000', 'tag 31, tag 32'));
		array_push($php_array, array('title 6','content 6','creator 3', '00-00-0000', 'tag 31, tag 32'));
		array_push($php_array, array('title 7','content 7','creator 3', '00-00-0000', 'tag 31, tag 32'));
		array_push($php_array, array('title 8','content 8','creator 3', '00-00-0000', 'tag 31, tag 32'));
		array_push($php_array, array('title 9','content 9','creator 3', '00-00-0000', 'tag 31, tag 32'));
		array_push($php_array, array('title 10','content 10','creator 3', '00-00-0000', 'tag 31, tag 32'));
		array_push($php_array, array('title 11','content 11','creator 3', '00-00-0000', 'tag 31, tag 32'));
		array_push($php_array, array('title 12','content 12','creator 3', '00-00-0000', 'tag 31, tag 32'));
		array_push($php_array, array('title 13','content 13','creator 3', '00-00-0000', 'tag 31, tag 32'));
		
		//data for dataTable
		$dataTable = array();
		$tableContent = $dataTable = array();
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		array_push($tableContent, array('content 1','content 2','content 3', 'content 4', 'content 5', 'content 6'));
		
		$dataTable['header'] = array('header 1','header 2','header 3', 'header 4', 'header 5', 'header 6');
		$dataTable['content'] = $tableContent;
							
		// seting untuk tab harus seperti ini
		$tab_content = array();
		array_push($tab_content, array('title 1','table_view', $dataTable));
		array_push($tab_content, array('title 2','accordion_view',  $accordion));
		
		// ketika ingin dilempak ke view		
		$data['tab_content'] = $tab_content;
		
		
		$php_array = array();
		array_push($php_array, array('abc','def','ghi'));
		array_push($php_array, array('abc','def','ghi'));
		array_push($php_array, array('abc','def','ghi'));
		$js_array = json_encode($php_array);
		echo $js_array;
	}
	
	function session() { print_r($this->session->userdata('SAS_USER')); }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */