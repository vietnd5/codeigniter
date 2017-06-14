<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddData1_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function Insert($ten,$mota)
	{
		$data = array(
			'ten' =>$ten ,
			'mota' =>$mota 
			 );
		if($this->db->insert('sanpham', $data)){
			return $this->db->insert_id();
		}
		return false ; 
	}

}

/* End of file AddData1_model.php */
/* Location: ./application/models/AddData1_model.php */