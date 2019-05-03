<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('s_model');
	}

	public function index()
	{
		$data = array();
		$data['subtotal'] = $this->s_model->getsubTotal();
		$this->load->view('user/checkout',$data);
	}

	function act()
	{
		$subtotal = $this->s_model->getsubTotal();
		$delivery = $subtotal * 10 /100;
		$total = $delivery + $subtotal;
		$email = $this->session->userdata("email");

		$data = array(
			'nama_depan' => $this->input->post('nama_depan'),
			'nama_belakang' => $this->input->post('nama_belakang'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'kota' => $this->input->post('kota'),
			'kode_pos' => $this->input->post('kode_pos'),
			'telepon' => $this->input->post('telepon'),
			'comment' => $this->input->post('comment'),
			'total' => $total,
			'tanggal' => date("Y-m-d H:i:s")
		);
		$this->s_model->check($data,$email);
		redirect('Check_success');
	}


}
