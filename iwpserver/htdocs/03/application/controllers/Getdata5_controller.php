<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdata5_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); // để chống việc ghi đè lớp có sẵn ,m phai sử dụng từ khóa parent để giữ nguyên thông tin từ các  phương thức trước đố. 

	}

	public function index() // đây là hàm mặc định sẽ chạy khi bạn khởi tạo . 

	{
		$this->load->model('getdata5_model');// sau dong load nay thi  $this la nhan vat chinh  se co mto cong cu la getdata5_model
		$ketqualayduoc = $this->getdata5_model->layhetdulieu();
		echo "<pre>";
		var_dump($ketqualayduoc);
		echo "</pre>";
		$this->load->view('getdata5_view', array('cacketqua' =>  $ketqualayduoc ), FALSE);

	}

}

/* End of file Getdata5_controller.php */
/* Location: ./application/controllers/Getdata5_controller.php */