<?php

class Login_model extends CI_Model{

	function authanticate_user($username,$password)
	{
		$this->db->where('u_username',$username);
		$this->db->where('u_password',$password);
		$query = $this->db->get('user');
		if ($query->num_rows) {
			return $query->row();
		}
		return false;
	}
	
}

?>