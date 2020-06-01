<?php 
class Mbaju extends CI_Model{
	public $table = "baju";
	function __construct(){
		parent::__construct();
	}
	
	public function setData($nama_baju,$harga,$deskripsi,$gambar){
		$this->a = $nama_baju;
		$this->b = $harga;
		$this->c = $deskripsi;
		$this->d = $gambar;
	}
	
	public function add(){
		$arrayData = array(
			'nama_baju'=>$this->a,
			'harga'=>$this->b,
			'deskripsi'=>$this->c,
			'gambar'=>$this->d,
		);
		return $this->db->insert($this->table, $arrayData); 
	}
	
	public function edit($id_baju){
		$arrayData = array(
			'nama_baju'=>$this->a,
			'harga'=>$this->b,
			'deskripsi'=>$this->c,
			'gambar'=>$this->d,
		);
		$this->db->where('id_baju', $id_baju);
		return $this->db->update($this->table, $arrayData); 
	}	
	
	public function getList(){
		$this->db->order_by('id_baju',"DESC");
		$query = $this->db->get($this->table);
		return $query->result();
	}
	
	public function delete($id_baju){
		return $this->db->delete($this->table, array('id_baju'=>$id_baju));
	}
	
	function detail($id_baju){
		$condition = array("id_baju"=>$id_baju);
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