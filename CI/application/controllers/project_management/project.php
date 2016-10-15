<?php
class Project extends CI_Controller
{
	function index()
	{
		$data['fileToLoad'] = 'admin/projects-form-add';
		$this->load->view('template/template', $data);
	}
	function validate()
	{
		$this->form_validation->set_rules('name','Name','trim|required|min_length[4]');
		$this->form_validation->set_rules('category','Category','trim|required|min_length[4]');
		$this->form_validation->set_rules('location','Location','trim|required|min_length[4]');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();

		}
		else
		{
			$this->load->model('project_model/project_model');
			if($query = $this->project_model->add_project())
			{
				redirect('project_management/project/showProject');
			}
			else
			{
				$this->index();
			}
		}
	}
	function showProject()
	{
		$config['base_url'] = base_url().'project_management/project/showProject';
		$config['total_rows'] = $this->db->get('project')->num_rows();
		$config['per_page'] = 2;
		$config['num_link'] = 4;
		$config['attributes'] = array('class' => 'btn btn-default');
		$config['cur_tag_open'] = '&nbsp;<a class="btn btn-default">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);
		$this->load->model('project_model/project_model');
		$data['data'] = $this->project_model->get_project($config['per_page'], $this->uri->segment(4));
		$data["links"] = $this->pagination->create_links();

		$data['fileToLoad'] = 'admin/projects';
		$this->load->view('template/template', $data);
	}
	function showDetail()
	{
		$data['fileToLoad'] = 'admin/projects-detail';
		$this->load->view('template/template', $data);
	}
}
?>