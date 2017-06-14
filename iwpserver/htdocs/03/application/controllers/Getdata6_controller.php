<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdata6_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Getdata6_model');
		$dulieu = $this->Getdata6_model->getAllData(); 
				echo "<pre>";
				var_dump($dulieu);
				echo "</pre>";
		
		$this->load->view('getdata6_view',  array('dulieulayduoc' => $dulieu ) , FALSE);

	}

}

/* End of file Getdata6_controller.php */
/* Location: ./application/controllers/Getdata6_controller.php */