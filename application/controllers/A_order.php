<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_order extends CI_Controller{

  function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

  function index()
  {
    $data['order'] = $this->m_data->tampil_data_order()->result();
    $this->load->view('admin/order',$data);
  }

}
