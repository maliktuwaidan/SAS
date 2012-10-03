<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->library('sas_constants');
	}
	
	public function index()
	{
		//print_r($this->sas_constants->get_path(array('images','javascript','css')));
		
		echo " [
			['asd','Internet Explorer 4.0','Win 95+','4','X'],
			['Trident','Internet Explorer 5.0','Win 95+','5','C'],
			['Trident','Internet Explorer 5.5','Win 95+','5.5','A']";
			
		echo '<br><br>';
		
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