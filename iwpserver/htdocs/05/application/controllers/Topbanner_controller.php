<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topbanner_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('topbanner_model');
	}

	public function index()
	{
		// xu ly model de lay du lieu 
		//$this->load->view('topbanner_view');
		$this->getDataContact();
	}

	public function save(){
		$name = $this->input->post('name');
		$linkfb = $this->input->post('linkfb');
		$linkgg = $this->input->post('linkgg');
		$linkp = $this->input->post('linkp');
		$linktwiiter = $this->input->post('linktwiiter');
		$titlehotline = $this->input->post('titlehotline');
		$phone = $this->input->post('phone');
		$titlehours = $this->input->post('titlehours');
		$openinghours = $this->input->post('openinghours');
	 

		$result = $this->topbanner_model->insertThongtin($linkfb,$linkgg,$linkp,$linktwiiter
		,$titlehotline
		,$phone
		,$titlehours
		,$openinghours 
		);
		if ($result) {
			//success
			echo "insert thanh cong vao du lieu ";
		}else{
			//unsuccess
			echo "insert khongthanh cong ";
		}
	}

	public function getDataContact()
	{
		$dulieu = $this->topbanner_model->getDataModel();
		$dulieu = array('dulieulayduoc' => $dulieu );
		$this->load->view('topbanner_view', $dulieu, FALSE);
	}
}

/* End of file topbanner_controller.php */
/* Location: ./application/controllers/topbanner_controller.php */