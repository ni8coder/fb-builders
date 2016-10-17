<?php
class Income_model extends CI_Model
{
function get_income()
	{
		  $this->db->select('fb_customer.name as customer_name, project_income.*, project.name as project_name');
		  $this->db->from('fb_customer','project_income','project');
		  $this->db->join('project_income','fb_customer.id=project_income.customer_id','inner');
		  $this->db->join('project','project.id=project_income.project_id','inner');
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
		  //$this->db->where('project.id',$id);
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
	function update_income($id)
	{
		$edited_customer_data = array(
			'amount' => $this->input->post('amount'),
			'description' => $this->input->post('description'));
		$this->db->where('id', $id);
	    $this->db->update('project_income', $edited_customer_data);
	}
}
 ?>