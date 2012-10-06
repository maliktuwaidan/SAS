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
			$this->js =explode(",", str_replace(" ", "", $this->session->userdata('JS_INIT')));
		else
			return FALSE;
		
		// condition for dataTable script============================================================
		if(strpos($this->session->userdata('JS_INIT'),'Table') == TRUE) array_push($elements, $this->dataTable());
		
		// condition for adminFormBerita script======================================================
		if(in_array('v_formBerita', $this->js)) array_push($elements, $this->adminFormBerita());
		
//===========================================================================================
//INIT AJAX FORM=============================================================================
		
		if(in_array('ajaxTableDelete', $this->js)) array_push($elements,  $this->ajax_table_delete());
		if(in_array('ajaxFormInsert', $this->js)) array_push($elements,  $this->ajax_form_insert());
		if(in_array('ajaxFormUpdate', $this->js)) array_push($elements,  $this->ajax_form_update());
		
/*INIT AJAX FORM END  =======================================================================
*********************************************************************************************/
		
/* JAVASCRIPT CLASS AUTOLOAD START ===========================================================
*********************************************************************************************/
		
		//HIDE MESSAGE ONLY ELEMENT 
		array_push($elements, '$(".sas-message").hide().click(function(){$(this).hide("slow");});');
		
		/* INITIALIZE AJAX FORM SUBMIT, 
		CAN BE USED ONLY USED WHEN SUBMIT BUTTON HAS "submitForm" CLASS */
		array_push($elements, '$(".submitForm").click(function(){$(this).closest("form").submit();return false;});');
		
/* JAVASCRIPT CLASS AUTOLOAD END =============================================================
**********************************************************************************************/

		/*PARSED ALL SELECTED SCRIPT AND AUTOLOAD, ALL SCRIPT UNDER $elements VARIABLE
		  WILL BE PRINTED INSIDE $(document).ready() *******************************/
		echo $this->document_ready($elements);
		
		// destroy JS_INIT session
		$this->session->unset_userdata('JS_INIT');
	}
	
	function ajax_form_insert(){
		return '$(".ajaxFormInsert").submit(function() {if (confirm("Anda yakin dengan data yang sudah di input ?")==true){var ajaxForm = this;$.ajax({type: "POST",url: $(this).attr("action"),data: $(this).serialize(),success: function(data) {$(".sas-message").html(data).show("slow");window.location.replace(js_base_url);}})}return false;});';
	}
	
	function ajax_form_update(){
		return '$(".ajaxFormUpdate").submit(function() {if (confirm("Anda yakin dengan data yang sudah di input ?")==true){var ajaxForm = this;$.ajax({type: "POST",url: $(this).attr("action"),data: $(this).serialize(),success: function(data) {$(".sas-message").html(data).show("slow");}})}return false;});';
	}
	
	function ajax_table_delete(){
		return '$(".ajaxTableDelete").submit(function() {if (confirm("Anda Yakin Akan Menghapus Record ini ?")==true){var ajaxForm = this;$.ajax({type: "POST",url: $(this).attr("action"),data: $(this).serialize(),success: function(data) {$(".sas-message").html(data).show("slow");$(ajaxForm).closest("tr").empty();}})}return false;});';
	}
	
	function document_ready($params = array()){
		return '$(document).ready(function() {'.implode("", $params).'});';
	}
	
	function adminFormBerita(){
		$result = array();
		array_push($result, 'var hb_silk_icon_set_blue = $("#contentBerita").css("height","200").htmlbox({toolbars:[["bold","italic","underline","strike","sub","sup","separator_dots","undo","redo","separator_dots","left","center","right","justify","separator_dots","ol","ul","indent","outdent","separator_dots","link","unlink","image"]],icons:"silk",skin:"blue",idir:"'.base_url().'_/img/rtf'.'"});');
		return implode("",$result);
	}
	
	function dataTable(){
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