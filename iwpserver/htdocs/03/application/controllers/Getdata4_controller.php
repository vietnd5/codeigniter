<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class nha  {
	public $mainha = "bằng gỗ";
	public function datgiatri($giatri) {
		$this->mainha = $giatri; 
	}
	public function laygiatri(){
		return $this->mainha."<br/>"; 

	}
}



$motngoinha = new nha; 
echo $motngoinha->laygiatri();
$motngoinha->datgiatri("Kim loai") ;
echo $motngoinha->laygiatri();
//var_dump($obj);


class Getdata4_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "getdata4"; 
		$this->load->model('getdata4_model');  // sau khi laod model thi ta ( tuc la thang this ) sẽ được trang bị một cái biên tên là getdata4_model , với biến này ta có thể goi cac ham ben trong nos 
		$toanbodulieu = $this->getdata4_model->getAllData(); 

		  $this->load->view('getdata4_view', '$toanbodulieu', FALSE);
		  echo "<pre>";
		  var_dump($toanbodulieu);

	}

}

/* End of file Getdata4_controller.php */
/* Location: ./application/controllers/Getdata4_controller.php */