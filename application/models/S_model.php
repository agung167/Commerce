<?php
class S_model extends CI_Model {

    public function findAll()
    {
      return $this->db->get('kategori')->result();
    }

    public function findAllP()
    {
      return $this->db->get('produk')->result();
    }

    public function findByKategori($id_kategori)
    {
      $this->db->where('id_kategori', $id_kategori);
      return $this->db->get('produk')->result();
    }

    public function find($id_kategori)
    {
      $this->db->where('id_kategori', $id_kategori);
      return $this->db->get('kategori')->row();
    }

    public function get_single_product($id) {
    $this->db->select('*');
    $this->db->from('produk');
    $this->db->where('produk.id_produk', $id);
    $info = $this->db->get();
    return $info->result();
}

    public function get_all_featured_product() {
        return $this->db->get('produk')->result();
    }

    public function get_product_by_id($id) {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('produk.id_produk', $id);
        $info = $this->db->get();
        return $info->row();
    }

    public function addcart($data)
    {
      $this->db->insert('cart', $data);
    }

    public function getRcart()
    {
      $this->db->where('_c','1');
      $this->db->where('nama_pbl',$this->session->userdata("email"));
      return $this->db->get('cart')->result();
    }

    public function getsubTotal()
    {
      $this->db->select_sum('total');
      $this->db->where('_c', '1');
      $this->db->where('nama_pbl',$this->session->userdata("email"));
      $query = $this->db->get('cart')->row();
      return $query->total;
    }

    public function updateQty($data,$id)
    {
      $this->db->where('id', $id);
      $this->db->update('cart',$data);
    }

    public function check($data,$email)
    {
        $this->db->insert('order', $data);
        $this->db->query("update cart a join produk b on a.kode_p=b.id_produk and a.nama_pbl = '".$email."' set a._c = '0'");
    }

    public function total_cart($id)
    {
      $this->db->from('cart');
      $this->db->where('_c', '1');
      $query = $this->input->get();
      return $query->num_rows();
    }

    public function get_all_search_product($search){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->like('produk.nama_produk',$search,'both');
        $info = $this->db->get();
        return $info->result();
    }





}
?>
