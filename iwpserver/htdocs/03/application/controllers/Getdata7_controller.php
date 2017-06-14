<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdata7_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Getdata7_model');
		$dulieu = $this->Getdata7_model->getAllData(); 
				// echo "<pre>";
				// var_dump($dulieu);
				// echo "</pre>";
		
		 $mangluutru = array('dulieulayve' => $dulieu );

		 $this->load->view('Getdata7_view', $mangluutru, FALSE);

	}

}

/* End of file Getdata7_controller.php */
/* Location: ./application/controllers/Getdata7_controller.php */