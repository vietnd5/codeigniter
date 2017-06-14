<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdata6_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getAllData(){
		$this->db->select('*');
		$ketqua = $this->db->get('sanpham');
		$ketqua = $ketqua->result_array();
		return $ketqua; 
	}

}

/* End of file Getdata6_model.php */
/* Location: ./application/models/Getdata6_model.php */