<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class category extends CI_Controller {

        public function index()
    {
        $this->load->view('customer/category');
    }
}
