<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add2_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Add2_view');

	}
	public function add2()
	{
		$this->load->model('Add2_model');
		$ten = $this->input->post('ten') ;
		$mota = $this->input->post('mota');
		echo $this->Add2_model->insert($ten,$mota);
	}
	public function detail($id)
	{
		$this->load->model('Add2_model');	
		$ketqua  =$this->Add2_model->getByID($id); 
		$this->load->view('Add2detail_view', array('dulieu' =>$ketqua ));
		

	}

}

/* End of file Add2_controller.php */
/* Location: ./application/controllers/Add2_controller.php */