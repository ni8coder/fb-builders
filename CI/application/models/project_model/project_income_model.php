<?php
class Project_income_model extends CI_Model
{
	function add_income($project_id,$customer_id,$agent_id)
	{
		$new_income_data = array(
			'amount' => $this->input->post('amount'),
			'description' => $this->input->post('description'),
			'project_id' => $project_id,
			'customer_id' => $customer_id,
			'agent_id' => $agent_id
			);
		$insert = $this->db->insert('project_income', $new_income_data);
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
}
?>