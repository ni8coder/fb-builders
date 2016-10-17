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
	function get_project($per_page=NULL, $uri_segment=NULL,$id=NULL)
	{
		if($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('project');
		}
		if($per_page)
		{
			$query = $this->db->get('project', $per_page, $uri_segment);
		}
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function get_project_customer($id)
	{
		$this->db->select('fb_customer.*');
		$this->db->from('fb_customer');
		$this->db->join('project_customer','fb_customer.id=project_customer.customer_id','inner');
		$this->db->join('project','project.id=project_customer.project_id','inner');
		$this->db->where('project.id',$id);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			/*print_r($data);
			exit;*/
			return $data;
		}
	}
	function get_project_agent($id)
	{
		$this->db->select('fb_agent.*');
		$this->db->from('fb_agent');
		$this->db->join('project_agent','fb_agent.id=project_agent.agent_id','inner');
		$this->db->join('project','project.id=project_agent.project_id','inner');
		$this->db->where('project.id',$id);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function get_project_investor($id)
	{
		$this->db->select('fb_investor.*, project_investment.*');
		$this->db->from('fb_investor','project_investment');
		$this->db->join('project_investment','fb_investor.id=project_investment.investor_id','inner');
		$this->db->join('project','project.id=project_investment.project_id','inner');
		$this->db->where('project.id',$id);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			/*print_r($data);
			exit;*/
			return $data;
		}
	}
	function get_project_income($id)
	{
		$this->db->select('fb_customer.name as customer_name, project_income.*');
		$this->db->from('fb_customer','project_income');
		$this->db->join('project_income','fb_customer.id=project_income.customer_id','inner');
		$this->db->join('project','project.id=project_income.project_id','inner');
		$this->db->where('project.id',$id);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
		}
		$this->db->select('fb_agent.name as agent_name');
		$this->db->from('fb_agent');
		$this->db->join('project_income','fb_agent.id=project_income.agent_id','inner');
		$this->db->join('project','project.id=project_income.project_id','inner');
		$this->db->where('project.id',$id);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			$i = 0;
			foreach ($query->result() as $row) {
				foreach ($row as $key => $value) {
					$data[$i]->$key = $value;
					$i++;
				}
			}
			/*print_r($data);
			exit;*/
			return $data;
		}
	}
	function get_project_expense($id)
	{
		$this->db->select('project_expense.*');
		$this->db->from('project_expense');
		//$this->db->join('project_agent','fb_agent.id=project_agent.agent_id','inner');
		$this->db->join('project','project.id=project_expense.project_id','inner');
		$this->db->where('project.id',$id);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	function update_project($id)
	{
		
		$edited_customer_data = array(
			'name' => $this->input->post('name'),
			'location' => $this->input->post('location'),
			'type' => $this->input->post('type'),
			'category' => $this->input->post('category'),
			);
		$this->db->where('id', $id);
	    $this->db->update('project', $edited_customer_data);
	}
}
?>
