<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class celana extends CI_Controller {

        public function index()
    {
        $this->load->view('customer/v_celana');
    }
}
