<?php
class customer extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        /*
        if ($this->session->userdata('logged') != true){
            redirect('Login');
        } */
        $this->load->model('Mcustomer');
    }

    public function index()
    {
        $data['home'] = true;
        $data['hasil'] = $this->Mcustomer->getList();
        $this->load->view('admin/v_customer.php',$data);
    }  
    
     public function add($id_customer=NULL)
     {
        $this->load->library('form_validation');
        $submit = $this->input->post('submit');
        if ($submit){
            $a = $this->input->post('nama_lengkap');
            $b = $this->input->post('alamat');
            $c = $this->input->post('no_telp');
            $d = $this->input->post('email');
            $e = $this->input->post('id_customer');
            $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            
            if ($this->form_validation->run()==FALSE){
                $data['errors'] = TRUE;
            } else {
                $this->Mcustomer->setData($a,$b,$c,$d);
                if ($e){
                    // Simpan Edit data
                    $this->Mcustomer->edit($e);
                } else{
                    // simpan data baru
                    $this->Mcustomer->add();
                }
                redirect('admin/customer');
            }
        } 
        //jika membawa ID, artinya EDIT
        if ($id_customer) {
            $data['detail'] = $this->Mcustomer->detail($id_customer); 
        }
        $data['judul']="Tambah Data";
        $this->load->view('admin/v_addcustomer', $data);
    } 
        
        public function delete($id_customer){
            $this->Mcustomer->delete($id_customer);
            redirect('admin/customer');
        }
}

?>