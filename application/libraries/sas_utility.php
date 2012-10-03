<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sas_utility {

	function convert_array_keys_to_index($array = array())
	{
		$result = $temp = array();
		foreach($array as $row)
		{
			//recursive if $row was array
			if(is_array($row))
				array_push($result, $this->convert_array_keys_to_index($row));
			else
				array_push($result, $row);
		}
		
		return $result;
	}	
	
}

?>
