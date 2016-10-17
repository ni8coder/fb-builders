<?php
/**
* 
*/
class Project_customer_model extends CI_Model
{
	function add_customer($project_id)
	{
		$new_customer_data = array(
			'mr_no' => $this->input->post('mr_no'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'address' => $this->input->post('address'),
			'phoneno' => $this->input->post('phoneno'),
			'cnic' => $this->input->post('cnic'),
			'dob' => $this->input->post('dob'),
			);
		$insert = $this->db->insert('fb_customer', $new_customer_data);
		$customer_id = $this->db->insert_id();
		$project_customer_data = array(
			'customer_id' => $customer_id,
			'project_id' => $project_id
			);
		$insert = $this->db->insert('project_customer', $project_customer_data);
		return $insert;
	}
	function get_customer()
	{
		$query = $this->db->get('fb_customer');
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function link_customer($project_id, $customer_id)
	{
		$this->db->where('customer_id', $customer_id);
		$this->db->where('project_id', $project_id);
		$query = $this->db->get('project_customer');
		if($query->num_rows() > 0)
		{
			return 0;
		}
		else
		{
			$link_customer_data = array(
			'project_id' => $project_id,
			'customer_id' => $customer_id
			);
			$insert = $this->db->insert('project_customer', $link_customer_data);
			return $insert;
		}
	}
}
?>