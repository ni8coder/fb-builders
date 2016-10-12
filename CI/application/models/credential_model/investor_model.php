<?php 
class Investor_model extends CI_Model
{
	function add_investor()
	{
		$new_investor_data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'address' => $this->input->post('address'),
			'phoneno' => $this->input->post('phoneno'),
			'cnic' => $this->input->post('cnic'),
			'dob' => $this->input->post('dob'),
			);
		$insert = $this->db->insert('fb_investor', $new_investor_data);
			return $insert;
	}

	function get_investor($per_page, $uri_segment)
	{
		$query = $this->db->get('fb_investor', $per_page, $uri_segment);
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function update_investor($id)
	{
		$edited_investor_data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'address' => $this->input->post('address'),
			'phoneno' => $this->input->post('phoneno'),
			'cnic' => $this->input->post('cnic'),
			'dob' => $this->input->post('dob'),
			);
		$this->db->where('id', $id);
	    $this->db->update('fb_investor', $edited_investor_data);
	}
}
?>