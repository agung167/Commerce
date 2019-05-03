<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_shop extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('s_model');
	}


	public function index()
	{
		$data=array();
		$data['all_featured_products'] = $this->s_model->get_all_featured_product();
		$this->load->view('user/shop', $data);
	}

	public function kategori($id_kategori)
	{
		$data['title'] = 'Kategori';
		$data['page'] = 'shop/kategori';
		$data['kategori'] = $this->s_model->find($id_kategori);
		$this->load->view('shop', $data);
	}


}
