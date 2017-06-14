<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdata4_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	function getAllData() {
		$this->db->select('ten, mota');
		$command = $this->db->get('sanpham', 1, 0);
		$dulieu = $command->result_array();
		return $dulieu; 


	}

}

/* End of file getdata4_model.php */
/* Location: ./application/models/getdata4_model.php */