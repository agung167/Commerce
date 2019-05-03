<?php

class Login extends CI_Controller{
	var $CI = NULL;

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}


	function index(){
		$this->load->view('login');
	}


	function aksi_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
				'email' => $email,
				'password' => md5($password)
				);
		$cek = $this->m_login->cek_login("user", $where)->num_rows();
		if($cek > 0){
			$data_session = array(
					'email' => $email,
					'status' => "login"
					);
			$this->session->set_userdata($data_session);
			redirect(base_url("users"));
		}else{
			echo "Email dan password salah !";
		} 


	}

	public function register_user(){
	      $user=array(
				'nama'=>$this->input->post('nama'),
	      'username'=>$this->input->post('username'),
	      'email'=>$this->input->post('email'),
	      'password'=>md5($this->input->post('password')),
	      'telepon'=>$this->input->post('hp')
	        );
	        print_r($user);

	$email_check=$this->m_login->email_check($user['email']);

	if($email_check){
	  $this->m_login->register_user($user);
	  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
	  redirect('login');

	}
	else{

	  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
	  redirect('login');
	}
	}

	function edit($id){
	$where = array('id' => $id);
	$data['user'] = $this->m_login->edit_data($where,'user')->result();
	$this->load->view('admin/edit',$data);
}

function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$alamat = $this->input->post('alamat');
	$pekerjaan = $this->input->post('pekerjaan');

	$data = array(
		'nama' => $nama,
		'alamat' => $alamat,
		'pekerjaan' => $pekerjaan
	);

	$where = array(
		'id' => $id
	);

	$this->m_data->update_data($where,$data,'user');
	redirect('crud/index');
}

	function logout() {
		$this->session->sess_destroy();
		redirect(base_url('login'));

	}
}
