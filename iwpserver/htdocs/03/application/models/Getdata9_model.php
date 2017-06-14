<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdata9_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getAllData()
	{
		$this->db->select('*');
		// tra ve mang 
		$ketqua = $this->db->get('sanpham');
		$ketqua = $ketqua->result_array();
		return $ketqua; 
		
	}

}

/* End of file Getdata9_model.php */
/* Location: ./application/models/Getdata9_model.php */