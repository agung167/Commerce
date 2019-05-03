<?php

class A_produk extends CI_Controller
{
  function __construct(){
    parent::__construct();
    $this->load->model(array('m_data'));
  }

    public function index()
    {
      $data = array(
        'produk' => $this->m_data->tampil_data_produk()
      );
      $this->load->view('admin/produk',$data);
    }


    function hapus($id_produk){
		    $where = array('id_produk' => $id_produk);
		    $this->m_data->hapus_data($where,'produk');
		redirect('A_produk');
	}

  public function tambah_aksi_p()
  {
    $id_produk = $this->input->post('id_produk');
     	$id_kategori = $this->input->post('id_kategori');
     	$nama_produk = $this->input->post('nama_produk');
       $nama_kategori = $this->input->post('nama_kategori');
     	$deskripsi = $this->input->post('deskripsi');
     	$qty = $this->input->post('qty');
       $harga = $this->input->post('harga');
    $warna = $this->input->post('warna');

      // get foto
      $config['upload_path'] = './upload/';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['gambar']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['gambar']['name'])) {
	        if ( $this->upload->do_upload('gambar') ) {
	            $foto = $this->upload->data();
	            $data = array(
                            'gambar' => $foto['file_name'],
                            'id_produk' => $id_produk,
                          	 		'id_kategori' => $id_kategori,
                                 'nama_produk' => $nama_produk,
                          	 		'nama_kategori' => $nama_kategori,
                                 'deskripsi' => $deskripsi,
                          	 		'qty' => $qty,
                                 'harga' => $harga,
                          	 		'warna' => $warna,
	                        );
							$this->m_data->input_data($data);
              redirect('A_produk');
	        }else {
              die("gagal upload");
	        }
	    }else {
	      echo "tidak masuk";
	    }

  }

  function edit($id_produk){
	$where = array('id_produk' => $id_produk);
	$data['produk'] = $this->m_data->edit_data($where,'produk')->result();
  $this->load->view('admin/edit',$data);
}

function update(){
  $id_produk = $this->input->post('id_produk');
  $id_kategori = $this->input->post('id_kategori');
  $nama_produk = $this->input->post('nama_produk');
  $nama_kategori = $this->input->post('nama_kategori');
  $deskripsi = $this->input->post('deskripsi');
  $qty = $this->input->post('qty');
  $harga = $this->input->post('harga');
  $warna = $this->input->post('warna');

	$data = array(
    'id_produk' => $id_produk,
    'id_kategori' => $id_kategori,
    'nama_produk' => $nama_produk,
    'nama_kategori' => $nama_kategori,
    'deskripsi' => $deskripsi,
    'qty' => $qty,
    'harga' => $harga,
    'warna' => $warna
	);

	$where = array(
		'id_produk' => $id_produk
	);

	$this->m_data->update_data($where,$data,'produk');
	redirect('A_produk');
}

}
