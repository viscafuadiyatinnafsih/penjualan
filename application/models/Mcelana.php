<?php 
class Mcelana extends CI_Model{
	public $table = "celana";
	function __construct(){
		parent::__construct();
	}
	
	public function setData($nama_celana,$harga,$uraian,$gambar){
		$this->a = $nama_celana;
		$this->b = $harga;
		$this->c = $uraian;
		$this->d = $gambar;
	}
	
	public function add(){
		$arrayData = array(
			'nama_celana'=>$this->a,
			'harga'=>$this->b,
			'deskripsi'=>$this->c,
			'gambar'=>$this->d
		);
		return $this->db->insert($this->table, $arrayData); 
	}
	
	public function edit($id_baju){
		$arrayData = array(
			'nama_celana'=>$this->a,
			'harga'=>$this->b,
			'deskripsi'=>$this->c,
			'gambar'=>$this->d
		);
		$this->db->where('id_celana', $id_celana);
		return $this->db->update($this->table, $arrayData); 
	}	
	
	public function getList(){
		$query = $this->db->get($this->table);
		return $query->result();
	}
	
	public function delete($id_celana){
		return $this->db->delete($this->table, array('id_celana'=>$id_celana));
	}
	
	function detail($id_celana){
		$condition = array("id_celana"=>$id_celana);
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