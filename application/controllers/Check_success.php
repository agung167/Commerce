<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_success extends CI_Controller{


  function index()
  {
    $this->load->view('user/success');
  }

}
