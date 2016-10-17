<?php
class Expense_model extends CI_Model
{
function get_expense($per_page, $uri_segment)
	{
		$query = $this->db->get('project_expense', $per_page, $uri_segment);
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function update_expense($id)
	{
		$edited_customer_data = array(
			'amount' => $this->input->post('amount'),
			'description' => $this->input->post('description'));
		$this->db->where('id', $id);
	    $this->db->update('project_expense', $edited_customer_data);
		
	}
}
 ?>