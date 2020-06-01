<?php
class celana extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        /*
        if ($this->session->userdata('logged') != true){
            redirect('Login');
        } */
        $this->load->model('Mcelana');
    }

    public function index()
    {
        $data['home'] = true;
        $data['hasil'] = $this->Mcelana->getList();
        $this->load->view('admin/v_celana.php',$data);
    }  
    
     public function add($id_celana=NULL)
     {
        $this->load->library('form_validation');
        $submit = $this->input->post('submit');
        if ($submit){
            $a = $this->input->post('nama_celana');
            $b = $this->input->post('harga');
            $c = $this->input->post('deskripsi');
            $d = $this->input->post('gambar');
            $e = $this->input->post('id_celana');
            $this->form_validation->set_rules('nama_celana', 'Nama Celana', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
            $this->form_validation->set_rules('gambar', 'Gambar', 'required');
            
            if ($this->form_validation->run()==FALSE){
                $data['errors'] = TRUE;
            } else {
                $this->Mcelana->setData($a,$b,$c,$d);
                if ($e){
                    // Simpan Edit data
                    $this->Mcelana->edit($e);
                } else{
                    // simpan data baru
                    $this->Mcelana->add();
                }
                redirect('admin/celana');
            }
        } 
        //jika membawa ID, artinya EDIT
        if ($id_celana) {
            $data['detail'] = $this->Mcelana->detail($id_celana); 
        }
        $data['judul']="Tambah Data";
        $this->load->view('admin/v_addcelana', $data);
    } 
        
        public function delete($id_celana){
            $this->Mcelana->delete($id_celana);
            redirect('admin/celana');
        }
}

?>