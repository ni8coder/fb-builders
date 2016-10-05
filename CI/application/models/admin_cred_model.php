<?php

	class Admin_cred_model extends CI_Model
	{
		function validate($username, $password)
		{
			$this->db->where('username', $username);
			$this->db->where('password', md5($password));
			$query = $this->db->get('fb_admin');
			if($query->num_rows() == 1)
			{
				return true;
			}
		}
	}

?>