<?php
/**
* 
*/
class Project_agent_model extends CI_Model
{
	function add_agent($project_id)
	{
		$new_agent_data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'address' => $this->input->post('address'),
			'phoneno' => $this->input->post('phoneno'),
			'cnic' => $this->input->post('cnic'),
			'dob' => $this->input->post('dob'),
			);
		$insert = $this->db->insert('fb_agent', $new_agent_data);
		$agent_id = $this->db->insert_id();
		$project_agent_data = array(
			'agent_id' => $agent_id,
			'project_id' => $project_id
			);
		$insert = $this->db->insert('project_agent', $project_agent_data);
		return $insert;
	}
	function get_agent()
	{
		$query = $this->db->get('fb_agent');
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function link_agent($project_id, $agent_id)
	{
		$this->db->where('agent_id', $agent_id);
		$this->db->where('project_id', $project_id);
		$query = $this->db->get('project_agent');
		if($query->num_rows() > 0)
		{
			return 0;
		}
		else
		{
			$link_agent_data = array(
			'project_id' => $project_id,
			'agent_id' => $agent_id
			);
			$insert = $this->db->insert('project_agent', $link_agent_data);
			return $insert;
		}
	}
}
?>