<?php
class Project_expense_model extends CI_Model
{
	function add_expense($project_id)
	{
		$new_expense_data = array(
			'expense_by' => $this->input->post('expense_by'),
			'amount' => $this->input->post('amount'),
			'description' => $this->input->post('description'),
			'project_id' => $project_id,
			);
		$insert = $this->db->insert('project_expense', $new_expense_data);
		return $insert;
	}
}
?>