<?php
  class login_model extends CI_MODEL{
    public function ceklogin($data)
    {
		  return $this->db->get_where('customer',$data);
	  }
}
