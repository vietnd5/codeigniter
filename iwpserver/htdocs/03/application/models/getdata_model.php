<?php
class Getdata_model extends CI_Model{
	 
   
	function get_all(){
		$this->db->select('*');
		$query = $this->db->get('sanpham');
		$result = $query->result_array();
		return $result;
	}
 
}