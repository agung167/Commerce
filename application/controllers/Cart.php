<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('s_model');
	}

	public function index()
	{
		$data = array();
		$data['cart_contents'] = $this->s_model->getRcart();
		$data['subtotal'] = $this->s_model->getsubTotal();
		$this->load->view('user/cart', $data);
	}

	public function rsub()
	{
		$query = $this->db->query("select sum(total) from cart where _c='1'");
		foreach ($query->result_array() as $data) {
			echo $data['sum(total)'];
		}

	}

	public function updateQty()
	{
		$id = $this->input->post('id');
		$qty = $this->input->post('jumlah');
		$harga = $this->input->post('harga');
		$hasil = $qty * $harga;

		$data = array(
			'jumlah' => $qty,
			'total' => $hasil
		);
		$this->s_model->updateQty($data,$id);
		redirect('cart');

	}

	public function save_cart() {
        $data = array(
					'kode_p' => $this->input->post('id_produk'),
					'nama_pbl' => $this->session->userdata('email'),
					'nama' => $this->input->post('nama'),
					'harga' => $this->input->post('harga'),
					'jumlah' => '1',
					'total' => $this->input->post('harga'),
					'_c' => '1'
				);
					$this->s_model->addcart($data);
					redirect('cart');
    }

		public function hapusCrt()
		{
			$where = array('id' => $id);
			$this->m_data->hapus_data($where,'cart');
			redirect('cart');
		}
}
