<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sas_auth {

	function check_user() {
		if($this->session->userdata('SAS_USER') == TRUE)
				redirect('backend/login/sas2');
	}		
	
}

?>
