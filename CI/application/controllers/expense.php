<?php
class Expense extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//redirect('panel/is_logged_in');
		//$this->is_logged_in();
	}
	function showExpense()
	{
		//echo "danish";exit;
		$config['base_url'] = base_url().'expense/showExpense';
		$config['total_rows'] = $this->db->get('project_expense')->num_rows();
		$config['per_page'] = 2;
		$config['num_link'] = 4;
		$config['attributes'] = array('class' => 'btn btn-default');
		$config['cur_tag_open'] = '&nbsp;<a class="btn btn-default">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);
		$this->load->model('expense_model/expense_model');
		$data['data'] = $this->expense_model->get_expense($config['per_page'], $this->uri->segment(4));
		$data["links"] = $this->pagination->create_links();
		/*print_r($data);
		exit();*/
		$data['fileToLoad'] = 'admin/expense-directory';
		$this->load->view('template/template', $data);
	}
	function edit_expense()
	{
		$id=$this->uri->segment(3);
		//echo $id;exit;
		$this->load->model('Common_model');
		$data['edit_data']= $this->Common_model->get_info('project_expense',$id);
		$data['fileToLoad'] = 'admin/edit-expense';
		$this->load->view('template/template', $data);
		
	}
	public function update_data($id)
	{
		$this->load->model('expense_model/expense_model');		   
	    $id=$this->uri->segment(3);
		//echo $id;exit;
	    $this->expense_model->update_expense($id);
	    redirect('expense/showExpense');
		//$this->showCustomer();
		/*$data['fileToLoad'] = 'admin/customer-directory';
		$this->load->view('template/template', $data);*/
    //$this->session->set_flashdata('message', 'Your data updated Successfully..');
   	 //redirect('customer-directory');
    }
	public function delete_expense(){
		$id=$this->uri->segment(3);
		$this->load->model('Common_model');
		$this->Common_model->delete_record('project_expense',$id);
		redirect('income/showIncome');
		//$this->showCustomer();
		
	}
}
?>