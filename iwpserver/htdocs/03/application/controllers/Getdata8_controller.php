<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdata8_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Getdata8_model');
		$data = $this->Getdata8_model->getAllData(); 
		// $mangdl = array('mang' => $data );
		// 		echo "<pre>";
		// 		var_dump($mangdl);
		// 		echo "</pre>";
		// 	foreach ($mangdl as $value) {
		// 		echo $value['ten'];
		// 	}
		
		$this->load->view('Getdata8_view', array('dulieu' => $data ), FALSE);
	}

}

/* End of file Getdata8_controller.php */
/* Location: ./application/controllers/Getdata8_controller.php */