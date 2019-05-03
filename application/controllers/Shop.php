<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('s_model');
	}


	public function index()
	{
		$data=array();
		$data['all_featured_products'] = $this->s_model->get_all_featured_product();
		$this->load->view('shop', $data);
	}

	public function kategori($id_kategori)
	{
		$data['title'] = 'Kategori';
		$data['page'] = 'shop/kategori';
		$data['kategori'] = $this->s_model->find($id_kategori);
		$data['product'] = $this->s_model->findByKategori($id_kategori);
		$this->load->view('shop', $data);
	}



}
