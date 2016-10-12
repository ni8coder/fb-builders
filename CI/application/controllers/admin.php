<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/signin');
		//$this->load->view('index');
	}

	function validate_credentials()
	{
		/* $username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('admin_cred_model'); 
		$query = $this->admin_cred_model->validate($username, $password);
		if($query)
		{	
			$user_data = $this->session->all_userdata();
			$data = array(
				'username' => $username,
				'is_logged_in' => true);
			$this->session->set_userdata($data);
			redirect('panel/admin_panel');
		}
		else
		{
			$this->index();
		} */
		$data['fileToLoad'] = 'admin/customer-directory';
		$this->load->view('template/template',$data);
	}

	function customer()
	{
		$data['fileToLoad'] = 'admin/customer-directory';
		$this->load->view('template/template',$data);
	}
}
?>