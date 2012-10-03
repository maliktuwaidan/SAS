<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class javascript extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	var $js;
	var $inputText;
	var $inputTextArea;
	
	public function index()
	{
		//set global value
		$this->inputText = 'required:true,maxlength:50';
		$this->inputTextArea = 'required:true';
		
		$elements = array();
		// break session into array
		if($this->session->userdata('JS_INIT')) 
		{
			$this->js =explode(",", str_replace(" ", "", $this->session->userdata('JS_INIT')));
		}else{
			return FALSE;
		}
		
		// condition for dataTable script
		if(strpos($this->session->userdata('JS_INIT'),'Table') == TRUE) array_push($elements, $this->dataTable());
		
		// condition for validateFormBerita script
		if(in_array('v_formBerita', $this->js)) array_push($elements, $this->validateFormBerita());
		
		// condition for validateFormBerita script
		if(in_array('v_formBerita2', $this->js)) array_push($elements, $this->validateFormBerita2());
		
		//print parsed script
		echo $this->document_ready($elements);
		
		// destroy JS_INIT session
		$this->session->unset_userdata('JS_INIT');
	}
	
	function document_ready($params = array())
	{
		return '$(document).ready(function() {'.implode("", $params).'});';
	}
	
	function validateFormBerita()
	{
		$result = array();
		array_push($result, 'var hb_silk_icon_set_blue = $("#contentBerita").css("height","200").htmlbox({toolbars:[["bold","italic","underline","strike","sub","sup","separator_dots","undo","redo","separator_dots","left","center","right","justify","separator_dots","ol","ul","indent","outdent","separator_dots","link","unlink","image"]],icons:"silk",skin:"blue",idir:"'.base_url().'_/img/rtf'.'"});');
		array_push($result, "$('#berita').validate({rules:{judulBerita:{".$this->inputText."},contentBerita:{".$this->inputTextArea."}}, debug:true});");
		return implode("",$result);
	}
	
	function validateFormBerita2()
	{
		return "$('#berita2').validate({rules:{judulBerita:{".$this->inputText."},contentBerita:{".$this->inputTextArea."}}, debug:true});";
	}
	
	function dataTable()
	{
		// array buat nnampung hasil
		$result = array();
		//parsing array buat nentuin id dataTable yang diperluin
		foreach($this->js as $row)
		{
			if(strpos($row,'Table') == TRUE)
				array_push($result, "$('#".$row."').dataTable();");
		}
		return implode("",$result);
	}
	
	
}

/* End of file javascript.php */
/* Location: ./application/controllers/javascript.php */