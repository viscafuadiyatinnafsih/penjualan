<?php
class daftar_model extends CI_MODEL{

    public function __construct(){
    $this->load->database();
}

    public function addcustomer(){
    $data = array(
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'alamat' => $this->input->post('alamat'),
      'no_telp' => $this->input->post('no_telp'),
      'email' => $this->input->post('email'),
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
    );
    return $this->db->insert('customer',$data);
    }
}
?> 
