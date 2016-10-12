<?php 

class Customer extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//redirect('panel/is_logged_in');
		$this->is_logged_in();
	}
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
				redirect('user_management/customer/showCustomer');
				/*$data['fileToLoad'] = 'admin/customer-directory';
				$data['data'] = $this->customer_model->get_customer();
				$this->load->view('template/template', $data);*/
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
		$config['per_page'] = 2;
		$config['num_link'] = 4;
		$config['attributes'] = array('class' => 'btn btn-default');
		$config['cur_tag_open'] = '&nbsp;<a class="btn btn-default">';
		$config['cur_tag_close'] = '</a>';
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
		$id=$this->uri->segment(4);
		//echo $id;exit;
		$this->load->model('Common_model');
		$data['edit_data']= $this->Common_model->get_info('fb_customer',$id);
		$data['fileToLoad'] = 'admin/edit-customer';
		$this->load->view('template/template', $data);
		
	}
	public function update_data($id)
	{
		$this->load->model('credential_model/customer_model');		   
	    $id=$this->uri->segment(4);
	    $this->customer_model->update_customer($id);
	    redirect('user_management/customer/showCustomer');
		//$this->showCustomer();
		/*$data['fileToLoad'] = 'admin/customer-directory';
		$this->load->view('template/template', $data);*/
    //$this->session->set_flashdata('message', 'Your data updated Successfully..');
   	 //redirect('customer-directory');
    }
	public function delete_customer(){
		$id=$this->uri->segment(4);
		$this->load->model('Common_model');
		$this->Common_model->delete_record('fb_customer',$id);
		redirect('user_management/customer/showCustomer');
		//$this->showCustomer();
		
	}
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			show_404();
		}
	}
}

?>