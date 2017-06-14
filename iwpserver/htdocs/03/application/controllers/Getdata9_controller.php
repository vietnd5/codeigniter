<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdata9_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Getdata9_model');
		// su dung view lay du lieu cho vao array 
		$dulieu = $this->Getdata9_model->getAllData() ; 
		$this->load->view('Getdata9_view',  array('dulieulayve' =>$dulieu ) , FALSE);
		
		// in ra 
				// echo "<pre>";
				//  		var_dump($dulieu);
				//  		echo "</pre>";
				 		 
		

	}

}

/* End of file Getdata9_controller.php */
/* Location: ./application/controllers/Getdata9_controller.php */