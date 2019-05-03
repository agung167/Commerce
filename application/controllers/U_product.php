<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_product extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('s_model');
	}


	public function index()
	{
		$data = array(
			'get_single_product' => $this->s_model->get_single_product($id),
		);
	}

	public function single($id) {
        $data = array();
        $data['get_single_product'] = $this->s_model->get_single_product($id);
        $this->load->view('user/product', $data);
    }


}
