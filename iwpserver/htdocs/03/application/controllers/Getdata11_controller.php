<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdata11_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Getdata11_model');
		$dulieu = $this->Getdata11_model->getAllData(); 
				echo "<pre>";
				var_dump($dulieu);
				echo "</pre>";
		
	}

}

/* End of file Getdata11_controller.php */
/* Location: ./application/controllers/Getdata11_controller.php */