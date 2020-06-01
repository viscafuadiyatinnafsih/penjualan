<?php
class baju extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        /*
        if ($this->session->userdata('logged') != true){
            redirect('Login');
        } */
        $this->load->model('Mbaju');
    }

    public function index()
    {
        $data['home'] = true;
        $data['hasil'] = $this->Mbaju->getList();
        $this->load->view('admin/v_baju.php',$data);
    }  
    
     public function add($id_baju=NULL)
     {
        $this->load->library('form_validation');
        $submit = $this->input->post('submit');
        if ($submit){
            $a = $this->input->post('nama_baju');
            $b = $this->input->post('harga');
            $c = $this->input->post('deskripsi');
            $d = $this->input->post('gambar');
            $e = $this->input->post('id_baju');
            $this->form_validation->set_rules('nama_baju', 'Nama Baju', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
            $this->form_validation->set_rules('gambar', 'Gambar', 'required');
            
            if ($this->form_validation->run()==FALSE){
                $data['errors'] = TRUE;
            } else {
                $this->Mbaju->setData($a,$b,$c,$d);
                if ($e){
                    // Simpan Edit data
                    $this->Mbaju->edit($e);
                } else{
                    // simpan data baru
                    $this->Mbaju->add();
                }
                redirect('admin/baju');
            }
        } 
        //jika membawa ID, artinya EDIT
        if ($id_baju) {
            $data['detail'] = $this->Mbaju->detail($id_baju); 
        }
        $data['judul']="Tambah Data";
        $this->load->view('admin/v_addbaju', $data);
    } 
        
        public function delete($id_baju){
            $this->Mbaju->delete($id_baju);
            redirect('admin/baju');
        }
}

?>