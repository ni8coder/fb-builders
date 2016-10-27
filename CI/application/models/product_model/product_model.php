<?php
class Product_model extends CI_Model
{
	function get_product()
	{
	  $this->db->select('project_product.*, project.name as project_name');
	  $this->db->from('project_product','project');
	  //$this->db->join('project_product','product.id=project_product.product_id','inner');
	  $this->db->join('project','project.id=project_product.project_id','inner');
	  $query = $this->db->get();
	  if($query->num_rows() > 0)
	  {
	   foreach ($query->result() as $row) {
		$data[] = $row;
	   }
	   return $data;
	  }
	}
	function add_product()
	{
		$new_product_data = array(
			'product_name' => $this->input->post('name'),
			'project_id' => $this->input->post('project'),
			'description' => $this->input->post('description')
			);
		$insert = $this->db->insert('project_product', $new_product_data);
		return $insert;
	}
	function update_product($id)
	{
		$edited_product_data = array(
			'amount' => $this->input->post('amount'),
			'description' => $this->input->post('description'));
		$this->db->where('id', $id);
	    $this->db->update('project_product', $edited_product_data);
	}
}
 ?>