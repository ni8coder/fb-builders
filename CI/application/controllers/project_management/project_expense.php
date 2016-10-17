<?php
class Project_expense extends CI_Controller
{
	function index()
	{
		$data['fileToLoad'] = 'admin/project-new-expense';
		$this->load->view('template/template', $data);
	}
	function validate()
	{
		$project_id = $this->uri->segment(4);
		$this->form_validation->set_rules('expense_by','Expense By','trim|required|min_length[4]');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();

		}
		else
		{
			$this->load->model('project_model/project_expense_model');
			if($query = $this->project_expense_model->add_expense($project_id))
			{
				redirect('project_management/project/showDetail/'.$project_id);
			}
			else
			{
				$this->index();
			}
		}
	}
}
?>