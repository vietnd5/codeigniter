<?php 
class getdata3_model extends CI_Model {
    function get_data() {
        $this->db->select('*');
        $query = $this->db->get('sanpham');
        $result = $query->result_array(); // result_array() --> la ham lay du lieu va cho vao mang
        return $result ; 
    }
}
?>