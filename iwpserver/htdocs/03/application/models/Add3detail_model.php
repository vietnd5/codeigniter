<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add3detail_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getbyid($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$ketqua = $this->db->get('sanpham');
		$ketqua = $ketqua->result_array();
		return $ketqua[0];
	}

}

/* End of file Add3detail_model.php */
/* Location: ./application/models/Add3detail_model.php */