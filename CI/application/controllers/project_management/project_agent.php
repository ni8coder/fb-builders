<?php
class Project_agent extends CI_Controller
{
	function index()
	{
		$data['fileToLoad'] = 'admin/project-new-agent';
		$this->load->view('template/template', $data);
	}
	function validate()
	{
		$project_id = $this->uri->segment(4);
		$this->form_validation->set_rules('name','Name','trim|required|min_length[4]');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();

		}
		else
		{
			$this->load->model('project_model/project_agent_model');
			if($query = $this->project_agent_model->add_agent($project_id))
			{
				redirect('project_management/project/showDetail/'.$project_id);
			}
			else
			{
				$this->index();
			}
		}
	}
	function link_agent()
	{
		$project_id = $this->uri->segment(4);
		$agent_id = $this->uri->segment(5);
		$this->load->model('project_model/project_agent_model');
		//$query = $this->project_agent_model->link_agent($project_id, $agent_id);
		if($query = $this->project_agent_model->link_agent($project_id, $agent_id))
		{
			redirect('project_management/project/showDetail/'.$project_id);
		}
		else
		{
			redirect('project_management/project/showDetail/'.$project_id);
			//$this->agent_list();
		}

	}
	function agent_list()
	{
		$project_id = $this->uri->segment(4);
		/*$config['base_url'] = base_url().'project_management/project_agent/agent_list';
		$config['total_rows'] = $this->db->get('fb_agent')->num_rows();
		$config['per_page'] = 4;
		$config['num_link'] = 6;
		$config['attributes'] = array('class' => 'btn btn-default');
		$config['cur_tag_open'] = '&nbsp;<a class="btn btn-default">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);*/
		$this->load->model('project_model/project_agent_model');
		$data['data'] = $this->project_agent_model->get_agent($project_id);
		//$data["links"] = $this->pagination->create_links();

		$data['fileToLoad'] = 'admin/project-agent-list';
		$this->load->view('template/template', $data);
	}

}
?>