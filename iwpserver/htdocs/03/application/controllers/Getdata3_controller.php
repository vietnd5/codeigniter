<?php 
    class getdata3_controller extends CI_Controller 
    {
        function index() {
            $this->load->model('getdata3_model');
            $this->load->view('getdata3_view',array(
                'cacsanpham' => $this->getdata3_model->get_data() 
            ));
            echo "<pre>";
            var_dump($this->getdata3_model->get_data() );
            die();  
        }
    }
?>