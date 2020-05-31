<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class belanja extends CI_Controller {

        public function index()
    {
        $this->load->view('customer/v_belanja');
    }
}
