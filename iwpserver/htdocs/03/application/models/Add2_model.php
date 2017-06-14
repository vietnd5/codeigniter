<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add2_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($ten, $mota)
	{
		$data = array('ten' => $ten , "mota"=>$mota );
		$this->db->insert('sanpham', $data);
		return $this->db->insert_id();
	}
	public function getByID($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dulieu = $this->db->get('sanpham');
		$dulieu = $dulieu->result_array();
		return $dulieu[0];
	}

}

/* End of file Add2_model.php */
/* Location: ./application/models/Add2_model.php */