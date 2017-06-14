<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddData1_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "form themsp";
		$this->load->view('AddData1_view');
	}
	public function AddData()
	{
		$ten = $this->input->post('ten');
		$mota = $this->input->post('mota');
		$this->load->model('AddData1_model');
		echo $this->AddData1_model->Insert($ten,$mota);
	}

}

/* End of file AddData1_controller.php */
/* Location: ./application/controllers/AddData1_controller.php */