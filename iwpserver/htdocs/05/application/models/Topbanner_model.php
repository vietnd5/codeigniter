<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topbanner_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertThongtin($linkfb,$linkgg,$linkp,$linktwiiter
		,$titlehotline
		,$phone
		,$titlehours
		,$openinghours 
		)
	{
		$data = array(
			'social' => array(
					'linkfb' => $linkfb,
					'linkgg' => $linkgg,
					'linkp' => $linkp,
					'linktwiiter' => $linktwiiter
				),
			'hotline'=>array( 
					'titlehotline' => $titlehotline,
					'phone' => $phone  

			 ),
			'openh' => array( 
					'titlehours' => $titlehours,
					'openinghours' => $openinghours)
			);
		$data = json_encode($data); //  biến mảng trong mảng thành một cái json , sao đó inser cái này vào bảng dữ liệu. 
		$data = array('contactjson' => $data );
		$this->db->insert('contact_topheader', $data);
		return $this->db->insert_id();

		// echo "<pre>";
		// var_dump($data);
		// echo "</pre>";
		// $data2 = json_decode($data);
		// echo "<pre>";
		// var_dump($data2);
		// echo "</pre>";
		// die();
	}

	public function getDataModel()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('contact_topheader', 1, 0);
		$ketqua = $ketqua->result_array(); // lấy dữ liệu ra và nhét  vào mảng 
				echo "<pre>";
				var_dump($ketqua);
				echo "</pre>";
				
		return $ketqua ; 
	}

}

/* End of file Topbanner_model.php */
/* Location: ./application/models/Topbanner_model.php */