<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->library('sas_constants');
	}
	
	public function index()
	{		
		echo form_open('test/cek_form');
		echo form_input('text');
		$options = array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                );
		echo form_dropdown('dropdown', $options, 'large');
		echo form_checkbox('check', 'accept', TRUE);
		echo form_radio('radio', 'radio true', TRUE);
		echo form_radio('radio', 'radio false');
		echo form_submit('mysubmit', 'Submit Post!');
		echo form_close();
	}
	
	function cek_form() { 
		print_r($_POST);
		foreach($_POST as $form => $val){
			echo '<br>'.$form.' : '.$val;
			if($val)
				echo ' => TRUE';
			else
				echo ' => FALSE';
		}
		
		echo '<br>';
		
		
	}
	function cek_array()
	{
		$test_array = array('array 0' => 'content 0', 'array 1' => 'content 1', 'array 2' => 'content 2');
		$array2 = array('content 0', 'content 1', 'array 100');
		print_r($test_array);
		foreach($test_array as $row => $content)
		{
			echo '<br>'.$row.' = '.$content;
		}
		
		echo '<br>';
		
		foreach($array2 as $row => $content)
		{
			if(in_array($content, $test_array))
			{
				echo '<br>'.$row.' =>'.$content.' inside $test_array';
			}
			else
				echo '<br>'.$row.' =>'.$content.' not found in $test_array';
			{
			}
		}
		
		
		$array_kosong = array();
		
		if($array_kosong)
			echo '<br><br>'.'$array_kosong bernilai TRUE';
		else
			echo '<br><br>'.'$array_kosong bernilai FALSE';
	}
	
	
	function kondisi() { 
		if(0)
			echo 'TRUE';
		else
			echo 'FALSE'; 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */