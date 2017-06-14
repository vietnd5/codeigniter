<?php 
class getdata2 extends CI_Controller  { // ke thua CIcontroller
    function index() { // bat buoc co ham index
        $this->load->model('getdata2_model'); // sử dụng model tên là getdata2model 
        $ketqua = $this->getdata2_model->get_all(); // su dung ham get_all() khai bao trong model này 
        $this->load->view('getdata2_view',array(
            'cacsanpham' => $ketqua 
        ));// load view getdata2view và trung chuyển giá trị là một mảng lấy từ 
    }
}
?>