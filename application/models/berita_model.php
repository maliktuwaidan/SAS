<?php

class berita_model extends CI_Model {

	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();
		
		$this->load->library('form_validation');
	}
	
	function get_all_active_berita()
	{
		$this->db->select('SAS_BERITA_TITLE, SAS_BERITA_CONTENT, SAS_ADDED_BY, SAS_ADDED_DATE, SAS_BERITA_TAG, SAS_BERITA_ID');
		$this->db->where('SAS_ACTIVE_FLAG ', 1);
		$this->db->order_by('SAS_ADDED_DATE', "desc"); 
		$query = $this->db->get('sas_berita');
		if ($query->num_rows() != 0)
		{
			return $query->result_array();
		}
		else
		{
			return FALSE;
		}
	}
	
	function get_all_admin_berita()
	{
		$this->db->select('SAS_BERITA_ID, SAS_BERITA_TITLE, SAS_BERITA_TAG, SAS_PUBLISH_FLAG, SAS_LAST_UPDATE');
		$this->db->where('SAS_ACTIVE_FLAG ', 1);
		$this->db->where('SAS_ADDED_BY_NAME', $this->session->userdata('SAS_USER')['SAS_USER_NAME']);
		$query = $this->db->get('sas_berita');
		if ($query->num_rows() != 0)
		{
			return $query->result_array();
		}
		else
		{
			return FALSE;
		}
	}
	
	function ajax_insert()
	{	
		// validasi field mandatori
		$validation = $this->_field_check();
		if($validation) return $validation;
		
		$session = $this->session->userdata('SAS_USER');
		$data = array();
			$data['SAS_BERITA_TITLE'] = $this->input->post('judulBerita');
			$data['SAS_BERITA_CONTENT'] = $this->input->post('contentBerita');
			$data['SAS_BERITA_TAG'] = $this->input->post('tagBerita');
			$data['SAS_ADDED_BY'] = $session['SAS_USERNAME'];
			$data['SAS_ADDED_BY_NAME'] = $session['SAS_USER_NAME'];
			$data['SAS_LAST_UPDATE'] = $this->sas_constants->get_sas_date();
			$data['SAS_ADDED_DATE'] = $this->sas_constants->get_sas_date();
			$data['SAS_PUBLISH_FLAG'] = $this->input->post('publishBerita');
		
		$insert = $this->db->insert('sas_berita', $data);
		if($insert)
			return ''.$this->input->post('judulBerita').' berhasil dibuat.';
		else
			return 'Proses Pembuatan "'.$this->input->post('judulBerita').'" gagal, harap ulangi prosedur.';
	}
	
	function ajax_delete()
	{	
		// checking mandatory parameter
		if(!$this->input->post('id'))
			return '<code>ID Berita tidak dikenali, proses gagal.</code>';
		$session = $this->session->userdata('SAS_USER');
		$this->db->where('SAS_BERITA_ID', $this->input->post('id'));
		$this->db->where('SAS_ADDED_BY', $session['SAS_USERNAME']);
		$delete = $this->db->update('sas_berita', array('SAS_ACTIVE_FLAG' => 0));
		if($delete)
			return 'Berita dengan ID : '.$this->input->post('id').' telah dihapus';
		else
			return 'Proses hapus berita gagal, harap ulangi prosedur.';
	}
	
	function _field_check()
	{	
		$this->form_validation->set_rules('judulBerita', 'Judul Berita', 'required');
		$this->form_validation->set_rules('contentBerita', 'Content Berita', 'required');
		$this->form_validation->run();
		return validation_errors();
	}
	
}
/* End of file berita_model.php */
/* Location: ./application/models/berita_model.php */
