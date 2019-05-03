<?php

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function tampil_data_produk(){
		return $this->db->get('produk')->result();
	}
	function tampil_data_kategori(){
		return $this->db->get('kategori');
	}
	public function tampil_data_order()
	{
		return $this->db->get('order');
	}
	function input_data($data){
		$this->db->insert('produk',$data);
      return TRUE;
	}
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}

function edit_data($where,$table){
	return $this->db->get_where($table,$where);
}

function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	


}
