<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SlideManage_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('slideManage_view');
	}

}

/* End of file SlideManage_controller.php */
/* Location: ./application/controllers/SlideManage_controller.php */