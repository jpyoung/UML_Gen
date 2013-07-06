<?php
/**
 * @author Jack Young
 * @Date: 07-06-2013
 */
class User_management_model extends CI_Model {
	
	
	function edit_user_info($profile_data, $whereAt) {
		 $this->db->where('u_id',$whereAt);
	     $this->db->update('user', $profile_data);	
	}
	
}

?>
