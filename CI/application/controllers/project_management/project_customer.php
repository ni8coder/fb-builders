<?php
class Project_customer extends CI_Controller
{
	function index()
	{
		$data['fileToLoad'] = 'admin/project-new-customer';
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
			$this->load->model('project_model/project_customer_model');
			if($query = $this->project_customer_model->add_customer($project_id))
			{
				redirect('project_management/project/showDetail/'.$project_id);
			}
			else
			{
				$this->index();
			}
		}
	}
	function link_customer()
	{
		$project_id = $this->uri->segment(4);
		$customer_id = $this->uri->segment(5);
		$this->load->model('project_model/project_customer_model');
		//$query = $this->project_customer_model->link_customer($project_id, $customer_id);
		if($query = $this->project_customer_model->link_customer($project_id, $customer_id))
		{
			redirect('project_management/project/showDetail/'.$project_id);
		}
		else
		{
			redirect('project_management/project/showDetail/'.$project_id);
			//$this->customer_list();
		}

	}
	function customer_list()
	{
		$project_id = $this->uri->segment(4);
		/*$config['base_url'] = base_url().'project_management/project_customer/customer_list';
		$config['total_rows'] = $this->db->get('fb_customer')->num_rows();
		$config['per_page'] = 4;
		$config['num_link'] = 6;
		$config['attributes'] = array('class' => 'btn btn-default');
		$config['cur_tag_open'] = '&nbsp;<a class="btn btn-default">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);*/
		$this->load->model('project_model/project_customer_model');
		$data['data'] = $this->project_customer_model->get_customer($project_id);
		//$data["links"] = $this->pagination->create_links();

		$data['fileToLoad'] = 'admin/project-customer-list';
		$this->load->view('template/template', $data);
	}

}
?>