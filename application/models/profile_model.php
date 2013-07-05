<?php
/**
 * @author Jack Young
 * @Date: 07-05-2013
 */

class Profile_model extends CI_Model {
	
	
	function edit_profile_info($profile_data, $whereAt) {
		 $this->db->where('u_id',$whereAt);
	     $this->db->update('user', $profile_data);
		echo 'Update Successful';
		
	}
	
	
	function profile_change_password($new_pwd, $where_at) {
		if ($where_at != "" && $new_pwd != "") {
			
			$data = array('u_password' => $new_pwd);
			$this->db->where('u_id',$where_at);
		    $this->db->update('user', $data);
			$this->session->unset_userdata('password');
			$this->session->set_userdata('password', $new_pwd);
			echo 'Password Update Successful';
			
		} else {
			echo 'Unable to Update Password';
		}

	}
	
	
}

?>