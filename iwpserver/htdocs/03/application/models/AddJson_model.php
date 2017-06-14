<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddJson_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertdirect($title,$json)
	{
		$data = array('title' => $title, 'json'=>$json );
		$this->db->insert('angular', $data);
		return $this->db->insert_id();
	}
	public function getAllData()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('angular');
		$dulieu = $dulieu->result_array();	
		return $dulieu; 
	}

}

/* End of file AddJson_model.php */
/* Location: ./application/models/AddJson_model.php */