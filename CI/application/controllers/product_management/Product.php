<?php
class Product extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    //redirect('panel/is_logged_in');
    //$this->is_logged_in();
  }
  function index()
  {
    $this->load->model('project_model/project_model');
    $data['data'] = $this->project_model->get_project();
    $data['fileToLoad'] = 'admin/product-form-add';
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
      $this->load->model('product_model/product_model');
      if($query = $this->product_model->add_product())
      {
        redirect('product_management/product/showProduct');
      }
      else
      {
        $this->index();
      }
    }
  }
  function showProduct()
  {
    //echo "danish";exit;
    /* $config['base_url'] = base_url().'product/showproduct';
    $config['total_rows'] = $this->db->get('project_product')->num_rows();
    $config['per_page'] = 2;
    $config['num_link'] = 4;
    $config['attributes'] = array('class' => 'btn btn-default');
    $config['cur_tag_open'] = '&nbsp;<a class="btn btn-default">';
    $config['cur_tag_close'] = '</a>';
    $this->pagination->initialize($config); */
    $this->load->model('product_model/product_model');
    $data['data'] = $this->product_model->get_product();
    //$data["links"] = $this->pagination->create_links();
    /*print_r($data);
    exit();*/
    $data['fileToLoad'] = 'admin/product-directory';
    $this->load->view('template/template', $data);
  }
  function edit_product()
  {
    $id=$this->uri->segment(3);
    //echo $id;exit;
    $this->load->model('Common_model');
    $data['edit_data']= $this->Common_model->get_info('project_product',$id);
    //print_r($data);exit;
    $data['fileToLoad'] = 'admin/edit-product';
    $this->load->view('template/template', $data);
    
  }
  public function update_data($id)
  {
    $this->load->model('product_model/product_model');       
      $id=$this->uri->segment(4);
      $this->product_model->update_product($id);
      redirect('product/showProduct');
    //$this->showCustomer();
    /*$data['fileToLoad'] = 'admin/customer-directory';
    $this->load->view('template/template', $data);*/
    //$this->session->set_flashdata('message', 'Your data updated Successfully..');
     //redirect('customer-directory');
    }
  public function delete_product(){
    $id=$this->uri->segment(4);
    $this->load->model('Common_model');
    $this->Common_model->delete_record('project_product',$id);
    redirect('product/showProduct');
    //$this->showCustomer();
    
  }
}
?>