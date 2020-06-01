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
		$this->db->where('id_customer', $id_customer);
		return $this->db->update($this->table, $arrayData); 
	}	
	
	public function getList(){
		$this->db->order_by('id_customer',"DESC");
		$query = $this->db->get($this->table);
		return $query->result();
	}
	
	public function delete($id_customer){
		return $this->db->delete($this->table, array('id_customer'=>$id_customer));
	}
	
	function detail($id_customer){
		$condition = array("id_customer"=>$id_customer);
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