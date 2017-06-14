<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdata10_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Getdata10_model');
		$dulieu = $this->Getdata10_model->getAllData(); 
				echo "<pre>";
				var_dump($dulieu);
				echo "</pre>";
		
	}

}

/* End of file Getdata10_controller.php */
/* Location: ./application/controllers/Getdata10_controller.php */