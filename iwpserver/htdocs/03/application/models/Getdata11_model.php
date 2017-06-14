<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdata11_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getAllData()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('sanpham');
		$dulieu = $dulieu->result_array();
		return $dulieu; 
	}

}

/* End of file Getdata11_model.php */
/* Location: ./application/models/Getdata11_model.php */