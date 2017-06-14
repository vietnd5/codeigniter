<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddJson_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('AddJson_model');
		$ketqua = $this->AddJson_model->getAllData(); 
		$ketqua =  array('dulieulayduoc' => $ketqua );
		$this->load->view('AddJson_view', $ketqua, FALSE);
 

	}
	public function insertData()
	{
		// lay du lieu tu view
		$title = $this->input->post('title');
		$json = $this->input->post('json');
		//load model xu ly 
		$this->load->model('AddJson_model');
		 echo  $this->AddJson_model->insertdirect($title,$json);

	}
	public function getAllDataAndPushToView()
	{

		
	}
}

/* End of file AddJson_controller.php */
/* Location: ./application/controllers/AddJson_controller.php */