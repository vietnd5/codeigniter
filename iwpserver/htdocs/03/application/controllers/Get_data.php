<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class get_data extends CI_Controller {
 
	public function index()
	{
		// phpinfo();
      //  echo "hello";
		$this->load->model('getdata_model');
		$result = $this->getdata_model->get_all();

		$this->load->view('get_data', array(
				'sanphams' => $result
			));
	}
 

}
