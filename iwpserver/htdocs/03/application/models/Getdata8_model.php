<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdata8_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	function getAllData()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('sanpham');

		$ketqua = $ketqua->result_array();
		 return $ketqua ; 
	}

}

/* End of file Getdata8_model.php */
/* Location: ./application/models/Getdata8_model.php */