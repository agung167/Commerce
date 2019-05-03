<?php

/**
 *
 */
class M_login extends CI_Model
{
  function cek_login($table,$where){
    return $this->db->get_where($table,$where);
  }

  public function register_user($user){
    $this->db->insert('user', $user);
  }

public function email_check($email){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}

function edit_data($where,$table){
	return $this->db->get_where($table,$where);
}

}
