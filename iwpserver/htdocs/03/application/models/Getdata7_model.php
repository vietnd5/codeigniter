<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdata7_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getAllData() {
		// tac dung ham nay la lay het du lieu tu co so du lieu
		// su dung bien db cua this
		$this->db->select('*');
		$dulieu = $this->db->get('sanpham');
		$dulieu = $dulieu->result_array();
		return $dulieu ; 
	}

}

/* End of file Getdata7_model.php */
/* Location: ./application/models/Getdata7_model.php */

?>