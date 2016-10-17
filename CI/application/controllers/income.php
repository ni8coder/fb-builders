<?php
class Income extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//redirect('panel/is_logged_in');
		//$this->is_logged_in();
	}
	function showIncome()
	{
		//echo "danish";exit;
		/* $config['base_url'] = base_url().'income/showIncome';
		$config['total_rows'] = $this->db->get('project_income')->num_rows();
		$config['per_page'] = 2;
		$config['num_link'] = 4;
		$config['attributes'] = array('class' => 'btn btn-default');
		$config['cur_tag_open'] = '&nbsp;<a class="btn btn-default">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config); */
		$this->load->model('income_model/income_model');
		$data['data'] = $this->income_model->get_income();
		//$data["links"] = $this->pagination->create_links();
		/*print_r($data);
		exit();*/
		$data['fileToLoad'] = 'admin/income-directory';
		$this->load->view('template/template', $data);
	}
	function edit_income()
	{
		$id=$this->uri->segment(3);
		//echo $id;exit;
		$this->load->model('Common_model');
		$data['edit_data']= $this->Common_model->get_info('project_income',$id);
		//print_r($data);exit;
		$data['fileToLoad'] = 'admin/edit-income';
		$this->load->view('template/template', $data);
		
	}
	public function update_data($id)
	{
		$this->load->model('income_model/income_model');		   
	    $id=$this->uri->segment(3);
	    $this->income_model->update_income($id);
	    redirect('income/showIncome');
		//$this->showCustomer();
		/*$data['fileToLoad'] = 'admin/customer-directory';
		$this->load->view('template/template', $data);*/
    //$this->session->set_flashdata('message', 'Your data updated Successfully..');
   	 //redirect('customer-directory');
    }
	public function delete_income(){
		$id=$this->uri->segment(3);
		$this->load->model('Common_model');
		$this->Common_model->delete_record('project_income',$id);
		redirect('income/showIncome');
		//$this->showCustomer();
		
	}
}
?>