<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sas_constants {

    public function get_path($array_val = array()) { 
	
		$result = array();
		
		//image path
		if(in_array('image', $array_val)) 		$result['image'] = base_url().'_/img/'; 
		if(in_array('images', $array_val)) 		$result['images'] = base_url().'_/img/'; 
		if(in_array('img', $array_val)) 		$result['img'] = base_url().'_/img/'; 
		
		//javascript path
		if(in_array('javascript', $array_val)) 	$result['javascript'] = base_url().'_/js/'; 
		if(in_array('js', $array_val)) 			$result['js'] = base_url().'_/js/'; 
		
		//css path
		if(in_array('css', $array_val)) 		$result['css'] = base_url().'_/css/'; 
		
		return $result;
	}
	
	public function get_backend_attribute($array_val = array()) {	
		
		// get javascript for backend
		if(in_array('javascript', $array_val)){
		
			$result['javascript'] = array();
			
			array_push($result['javascript'], '<script src="'.base_url().'_/js/jquery.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/bootstrap-transition.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/bootstrap-alert.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/bootstrap-modal.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/bootstrap-dropdown.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/bootstrap-scrollspy.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/bootstrap-tab.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/bootstrap-tooltip.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/bootstrap-popover.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/bootstrap-button.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/bootstrap-collapse.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/bootstrap-typeahead.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/jquery.validate.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/jquery.dataTables.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/htmlbox.colors.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/htmlbox.styles.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/htmlbox.syntax.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/htmlbox.undoredomanager.min.js"></script>');
			array_push($result['javascript'], '<script src="'.base_url().'_/js/htmlbox.min.js"></script>');
		}
		
		// get css for backend
		if(in_array('css', $array_val)){
		
			$result['css'] = array();
			array_push($result['css'], link_tag(base_url().'_/css/demo_table.css'));
			array_push($result['css'], link_tag(base_url().'_/css/bootstrap.css'));
			array_push($result['css'], link_tag(base_url().'_/css/bootstrap-responsive.css'));
			array_push($result['css'], link_tag(base_url().'_/css/form-validate.css'));
		}
		
		// get icon for backend
		if(in_array('ico', $array_val)){
			$result['ico'] = array();
			array_push($result['ico'], link_tag(base_url().'_/img/ico.ico'));
		}
		
		// get layout image path for backend
		if(in_array('layout_image', $array_val)){
		
			$result['layout_image_path'] = base_url().'_/img/'; ;
		}
		
		// get uploaded image path for backend
		if(in_array('image', $array_val)){
		
			$result['image_path'] = base_url().'_/img/'; ;
		}
		
		return $result;
		
	}
	
	public function get_sas_code() {
		$time = getdate();	
		return 'SAS-'.$time['0'].'-'.$time['mday'].$time['mon'].'-'.$time['year'];
	}
	
	public function get_sas_date() {
		$time = getdate();	
		return $time['year'].'-'.$time['mon'].'-'.$time['mday'].' '.$time['hours'].':'.$time['minutes'].':'.$time['seconds'];
	}
	
	public function get_image_path() {	
		return base_url().'_/img/'; ;
	}
}

?>
