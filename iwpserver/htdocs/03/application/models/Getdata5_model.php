<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdata5_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function layhetdulieu(){
		$this->db->select('*');
		$caulenh = $this->db->get('sanpham');
		$ketqua = $caulenh->result_array();
		return $ketqua; 

	}

}

/* End of file Getdata5_model.php */
/* Location: ./application/models/Getdata5_model.php */