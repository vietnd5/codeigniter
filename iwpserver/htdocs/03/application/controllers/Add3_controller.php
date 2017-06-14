<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add3_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}
	public function detail($id)
	{
		$this->load->model('Add3detail_model');
		$dulieu = $this->Add3detail_model->getbyid($id); // dung model lay du lieu 
		$this->load->view('Add2detail_view', array('dulieu' => $dulieu ), FALSE); // 
	}

}

/* End of file Add3_controller.php */
/* Location: ./application/controllers/Add3_controller.php */