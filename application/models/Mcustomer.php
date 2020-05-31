<?php 
class Mcustomer extends CI_Model{
	public $table = "customer";
	function __construct(){
		parent::__construct();
	}
	
	public function setData($nama_lengkap,$alamat,$no_telp,$email){
		$this->a = $nama_lengkap;
		$this->b = $alamat;
		$this->c = $no_telp;
		$this->d = $email;
	}
	
	public function add(){
		$arrayData = array(
			'nama_lengkap'=>$this->a,
			'alamat'=>$this->b,
			'no_telp'=>$this->c,
			'email'=>$this->d,
		);
		return $this->db->insert($this->table, $arrayData); 
	}
	
	public function edit($id_customer){
		$arrayData = array(
			'nama_lengkap'=>$this->a,
			'alamat'=>$this->b,
			'no_telp'=>$this->c,
			'email'=>$this->d,
		);
		$this->db->where('id_lengkap', $id_lengkap);
		return $this->db->update($this->table, $arrayData); 
	}	
	
	public function getList(){
		$this->db->order_by('id_lengkap',"DESC");
		$query = $this->db->get($this->table);
		return $query->result();
	}
	
	public function delete($id_lengkap){
		return $this->db->delete($this->table, array('id_lengkap'=>$id_lengkap));
	}
	
	function detail($id_lengkap){
		$condition = array("id_lengkap"=>$id_lengkap);
		$query = $this->db->get_where($this->table,$condition);	
		if($query->num_rows() > 0){
			return $query->row();
		} else {
			return false;
		}
	}	
	
	public function getTotal(){
		return $this->db->count_all_results($this->tnews);
	}
	
}
?>