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
		$data['data'] = $this->project_model->get_project($config['per_page'], $this->uri->segment(4),NULL);
		$data["links"] = $this->pagination->create_links();

		$data['fileToLoad'] = 'admin/projects';
		$this->load->view('template/template', $data);
	}
	function showDetail()
	{
		if($this->uri->segment(4))
		{
			$id = $this->uri->segment(4);
		}
		$this->load->model('project_model/project_model');
		$data['customer'] = $this->project_model->get_project_customer($id);
		$data['agent'] = $this->project_model->get_project_agent($id);
		$data['investor'] = $this->project_model->get_project_investor($id);
		$data['income'] = $this->project_model->get_project_income($id);
		$data['expense'] = $this->project_model->get_project_expense($id);
		$data['data'] = $this->project_model->get_project(NULL,NULL,$id);
		$data['fileToLoad'] = 'admin/projects-detail';
		$this->load->view('template/template', $data);
	}
	function edit_project()
	{
		$id=$this->uri->segment(4);
		//echo $id;exit;
		$this->load->model('Common_model');
		$data['edit_data']= $this->Common_model->get_info('project',$id);
		$data['fileToLoad'] = 'admin/edit-project';
		$this->load->view('template/template', $data);
		
	}
	public function update_data($id)
	{
		$this->load->model('project_model/project_model');		   
	    $id=$this->uri->segment(4);
	    $this->project_model->update_project($id);
	    redirect('project_management/project/showProject');
		//$this->showCustomer();
		/*$data['fileToLoad'] = 'admin/customer-directory';
		$this->load->view('template/template', $data);*/
    //$this->session->set_flashdata('message', 'Your data updated Successfully..');
   	 //redirect('customer-directory');
    }
	public function delete_project(){
		$id=$this->uri->segment(4);
		$this->load->model('Common_model');
		$this->Common_model->delete_record('project',$id);
		redirect('project_management/project/showProject');
		//$this->showCustomer();
		
	}
}
?>