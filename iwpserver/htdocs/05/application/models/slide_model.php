<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slide_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function get_slide_data();
	{
		$this->db->select('*');
	}
	public function insert($title,$description,$image,$link,$linktext)
	{
		
	}

}

/* End of file slide_model.php */
/* Location: ./application/models/slide_model.php */