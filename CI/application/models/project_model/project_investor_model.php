<?php
/**
* 
*/
class Project_investor_model extends CI_Model
{
	function add_investor($project_id)
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
		$investor_id = $this->db->insert_id();
		$project_investment_data = array(
			'project_id' => $project_id,
			'investor_id' => $investor_id,
			'amount' => $this->input->post('amount'),
			'description' => $this->input->post('description')
			);
		$insert = $this->db->insert('project_investment', $project_investment_data);
		return $insert;
	}
	function get_investor()
	{
		$query = $this->db->get('fb_investor');
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function link_investor($project_id, $investor_id)
	{
		$this->db->where('investor_id', $investor_id);
		$this->db->where('project_id', $project_id);
		$query = $this->db->get('project_investment');
		if($query->num_rows() > 0)
		{
			return 0;
		}
		else
		{
			$link_investor_data = array(
			'project_id' => $project_id,
			'investor_id' => $investor_id,
			'amount' => $this->input->post('amount'),
			'description' => $this->input->post('description')
			);
			$insert = $this->db->insert('project_investment', $link_investor_data);
			return $insert;
		}
	}
}
?>