<?php
class Project_income extends CI_Controller
{
	function index()
	{
		$this->load->model('project_model/project_income_model');
		$data['customer'] = $this->project_income_model->get_customer();
		$data['agent'] = $this->project_income_model->get_agent();
		$data['fileToLoad'] = 'admin/project-new-income';
		$this->load->view('template/template', $data);
	}
	function validate()
	{
		$project_id = $this->uri->segment(4);
		$customer_id = $this->input->post('customer');
		$agent_id = $this->input->post('agent');
		$this->form_validation->set_rules('description','Description','trim|required|min_length[4]');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();

		}
		else
		{
			$this->load->model('project_model/project_income_model');
			if($query = $this->project_income_model->add_income($project_id,$customer_id,$agent_id))
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