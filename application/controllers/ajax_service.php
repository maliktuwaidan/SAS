<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ajax_service extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		//LOAD MODEL
		$this->load->model('login_model');
		$this->load->model('berita_model');
		
		// CHECK SESSION
		if(!$this->login_model->_check_user_session()) redirect('login');
		//check post parameter
		if(!$_POST) redirect('berita');
	}
	
	public function index()
	{ redirect('berita'); }
	
	function berita_delete() 
	{ echo '<pre>'.$this->berita_model->ajax_delete().'</pre>'; }
	
	function berita_insert() 
	{  echo '<pre>'.$this->berita_model->ajax_insert().'</pre>'; }
	
	function berita_update() 
	{  echo '<pre>'.$this->berita_model->ajax_update().'</pre>'; }

}

/* End of file welcome.php */
/* Location: ./application/controllers/ajax_service.php */