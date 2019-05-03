<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_welcome extends CI_Controller {

	function __construct()
  {
    parent::__construct();
    $this->load->model('s_model');
  }

	public function index()
	{
		$this->load->view('user/index');
	}
}
