<?php
class Project_investor extends CI_Controller
{
	function index()
	{
		$data['fileToLoad'] = 'admin/project-new-investor';
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
			$this->load->model('project_model/project_investor_model');
			if($query = $this->project_investor_model->add_investor($project_id))
			{
				redirect('project_management/project/showDetail/'.$project_id);
			}
			else
			{
				$this->index();
			}
		}
	}
	function link_investor()
	{
		$project_id = $this->uri->segment(4);
		$investor_id = $this->input->post('investor');
		$this->load->model('project_model/project_investor_model');
		//$query = $this->project_investor_model->link_investor($project_id, $investor_id);
		if($query = $this->project_investor_model->link_investor($project_id, $investor_id))
		{
			redirect('project_management/project/showDetail/'.$project_id);
		}
		else
		{
			redirect('project_management/project/showDetail/'.$project_id);
			//$this->investor_list();
		}

	}
	function investor_list()
	{
		$project_id = $this->uri->segment(4);
		/*$config['base_url'] = base_url().'project_management/project_investor/investor_list';
		$config['total_rows'] = $this->db->get('fb_investor')->num_rows();
		$config['per_page'] = 4;
		$config['num_link'] = 6;
		$config['attributes'] = array('class' => 'btn btn-default');
		$config['cur_tag_open'] = '&nbsp;<a class="btn btn-default">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);*/
		$this->load->model('project_model/project_investor_model');
		$data['data'] = $this->project_investor_model->get_investor($project_id);
		//$data["links"] = $this->pagination->create_links();

		$data['fileToLoad'] = 'admin/project-investor-list';
		$this->load->view('template/template', $data);
	}

}
?>