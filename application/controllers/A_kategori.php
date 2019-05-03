<?php

/**
 *
 */
class A_kategori extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_data');
  }

  function index()
  {
    $data['kategori'] = $this->m_data->tampil_data_kategori()->result();
    $this->load->view('admin/kategori',$data);
  }

  function tambah_aksi_k(){
  $id_kategori = $this->input->post('id_kategori');
  $nama_kategori = $this->input->post('nama_kategori');

  $data = array(
    'id_kategori' => $id_kategori,
    'nama_kategori' => $nama_kategori
    );
  $this->m_data->input_data($data,'kategori');
  redirect('A_kategori');
}

  function hapus($id_kategori){
      $where = array('id_kategori' => $id_kategori);
      $this->m_data->hapus_data($where,'kategori');
  redirect('A_kategori');
}
}
