<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('s_model');
  }

  public function index() {

        $search = $this->input->get('search');

        if(!empty($search)){
            $data = array();
            $data['get_all_product'] = $this->s_model->get_all_search_product($search);
            $data['search'] = $search;

            if ($data['get_all_product']) {
                $this->load->view('user/search', $data);
            } else {
                redirect('error');
            }
        }
        else {
                redirect('error');
            }
    }

}
