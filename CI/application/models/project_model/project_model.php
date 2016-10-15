<?php
class Project_model extends CI_Model
{
	function add_project()
	{
		$new_project_data = array(
			'name' => $this->input->post('name'),
			'category' => $this->input->post('category'),
			'location' => $this->input->post('location'),
			'type' => $this->input->post('type'),
			'parent_project' => $this->input->post('parent_project')
			);
		$insert = $this->db->insert('project', $new_project_data);
			return $insert;
	}
	function get_project($per_page, $uri_segment)
	{
		$query = $this->db->get('project', $per_page, $uri_segment);
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
