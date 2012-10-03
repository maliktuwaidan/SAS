<?php

class tabbed_model extends CI_Model {

	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();
	}
	
	var $data;

	function _generate_tab($tab = array())
	{
		if(count($tab) == 0)
			return FALSE;
			
		$result = array();
		$tab_id = array();
		$index = 0;
		
		foreach($tab as $row){
			array_push($tab_id, str_replace(" ","",$row['0']));
			//array_push($tab_type, str_replace(" ","",$row['1']));
			$index++;
		}
		
		array_push($result, $tab);
		array_push($result, $tab_id);
		array_push($result, $tab_type);
		
		return $result;
	}
	
	
	
}
/* End of file tabbed_model.php */
/* Location: ./application/models/tabbed_model.php */
