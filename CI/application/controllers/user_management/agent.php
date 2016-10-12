<?php 

class Agent extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//redirect('panel/is_logged_in');
		$this->is_logged_in();
	}
	function index()
	{

		$data['fileToLoad'] = 'admin/agent-form-add';
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
			$this->load->model('credential_model/agent_model');
			if($query = $this->agent_model->add_agent())
			{
				redirect('user_management/agent/showAgent');
				/*$data['fileToLoad'] = 'admin/agent-directory';
				$data['data'] = $this->agent_model->get_agent();
				$this->load->view('template/template', $data);*/
			}
			else
			{
				$this->index();
			}
		}
	}
	function showAgent()
	{
		$config['base_url'] = base_url().'user_management/agent/showAgent';
		$config['total_rows'] = $this->db->get('fb_agent')->num_rows();
		$config['per_page'] = 2;
		$config['num_link'] = 4;
		$config['attributes'] = array('class' => 'btn btn-default');
		$config['cur_tag_open'] = '&nbsp;<a class="btn btn-default">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);
		$this->load->model('credential_model/agent_model');
		$data['data'] = $this->agent_model->get_agent($config['per_page'], $this->uri->segment(4));
		$data["links"] = $this->pagination->create_links();
		/*print_r($data);
		exit();*/
		$data['fileToLoad'] = 'admin/agent-directory';
		$this->load->view('template/template', $data);
	}
	function edit_agent()
	{
		$id=$this->uri->segment(4);
		//echo $id;exit;
		$this->load->model('Common_model');
		$data['edit_data']= $this->Common_model->get_info('fb_agent',$id);
		$data['fileToLoad'] = 'admin/edit-agent';
		$this->load->view('template/template', $data);
		
	}
	public function update_data($id)
	{		   
		$this->load->model('credential_model/agent_model');
	    $id=$this->uri->segment(4);
	    $this->agent_model->update_agent($id);
	    redirect('user_management/agent/showAgent');
		//$this->showagent();
		/*$data['fileToLoad'] = 'admin/agent-directory';
		$this->load->view('template/template', $data);*/
    //$this->session->set_flashdata('message', 'Your data updated Successfully..');
   	 //redirect('agent-directory');
    }
	public function delete_agent(){
		$id=$this->uri->segment(4);
		$this->load->model('Common_model');
		$this->Common_model->delete_record('fb_agent',$id);
		redirect('user_management/agent/showAgent');
		//$this->showAgent();
		
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