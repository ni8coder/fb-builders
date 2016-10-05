<?php 

class Customer extends CI_Controller
{
	function index()
	{
		$data['fileToLoad'] = 'admin/customer_form_add';
		$this->load->view('template/template', $data);
	}
	function validate()
	{
		$this->form_validation->set_rules('name','Name','trim|required|min_length[4]');
		$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
		$this->form_validation->set_rules('email','Email Address','trim|required|valid_email');
		$this->form_validation->set_rules('address','Username','trim|required|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();

		}
		else
		{
			$this->load->model('credential_model/customer_model');
			if($query = $this->customer_model->add_customer())
			{
				$data['fileToLoad'] = 'admin/customer-directory';
				$this->load->view('template/template', $data);
			}
			else
			{
				$this->index();
			}
		}
	}
	function showCustomer()
	{
		$this->load->model('credential_model/customer_model');
		$data['data'] = $this->customer_model->get_customer();
		$data['fileToLoad'] = 'admin/customer-directory';
		$this->load->view('template/template', $data);
	}
}

?>