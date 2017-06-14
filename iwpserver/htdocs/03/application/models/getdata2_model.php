<?php 
class getdata2_model extends CI_Model{ // bat buoc phai ke thua
    function get_all(){ // ten ham dung de laydl
        $this->db->select('*');  // thuc hien cau lenh
        $query = $this->db->get('sanpham'); // lay tu ban san pham
        $result = $query->result_array(); //dua vao mang result 
        return $result;  // tra ve result 

    }
}
?>