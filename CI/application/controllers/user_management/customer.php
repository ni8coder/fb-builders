<?php 

class Customer extends CI_Controller
{
	function index()
	{

		$data['fileToLoad'] = 'admin/customer-form-add';
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
				$data['data'] = $this->customer_model->get_customer();
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
		$config['base_url'] = base_url().'user_management/customer/showCustomer';
		$config['total_rows'] = $this->db->get('fb_customer')->num_rows();
		$config['per_page'] = 1;
		$config['num_link'] = 4;
		$config['attributes'] = array('class' => 'btn btn-default');
		/*$config['first_link'] = '<button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-left"></i></button>';
		$config['last_link'] = '<button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></button>';*/
		/*$config['next_link'] = '<button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>';
		$config['num_tag_open'] = '<a class="btn btn-default">1';
		$config['num_tag_close'] = '</a>';
		$config['prev_link'] = '<button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>';*/
		
		//$config['display_pages'] = false;
		$this->pagination->initialize($config);
		$this->load->model('credential_model/customer_model');
		$data['data'] = $this->customer_model->get_customer($config['per_page'], $this->uri->segment(4));
		$data["links"] = $this->pagination->create_links();
		/*print_r($data);
		exit();*/
		$data['fileToLoad'] = 'admin/customer-directory';
		$this->load->view('template/template', $data);
	}
	function edit_customer()
	{
				$id=$this->uri->segment(3);
				$this->load->model('credential_model/customer_model');
				$this->data['edit_data']= $this->customer_model->edit_customer($id);
			    $this->load->view('edit-customer', $this->data, FALSE);
		
	}
	public function update_data(){
				   
				   $id=$this->uri->segment(3);
				   $data = array('mr_no'                   => $this->input->post('mr_no'),
				    			'name'                   => $this->input->post('name'),
							      'email'                      => $this->input->post('email'),
							      'username'                        => $this->input->post('username'),
							      'password'                        => $this->input->post('password'),
							      'address'                => $this->input->post('address'),
							      'phoneno'                     => $this->input->post('phoneno'),
							      'cnic'                     => $this->input->post('cnic'),
							      'dob'                 => $this->input->post('dob'));
								    $this->db->where('id', $id);
								    $this->db->update('fb_customer', $data);
    //$this->session->set_flashdata('message', 'Your data updated Successfully..');
   	 redirect('customer-directory/index');
    }
	 public function delete_customer(){  
			$id=$this->uri->segment(3);
		    $this->db->where('id', $id);
		    $this->db->delete('fb_customer');
    // $this->session->set_flashdata('message', 'Your data deleted Successfully..');
    redirect('customer-directory/index');
    }
}

?>