<?php 

class Investor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //redirect('panel/is_logged_in');
        $this->is_logged_in();
    }
    function index()
    {

        $data['fileToLoad'] = 'admin/investor-form-add';
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
            $this->load->model('credential_model/investor_model');
            if($query = $this->investor_model->add_investor())
            {
                redirect('user_management/investor/showInvestor');
                /*$data['fileToLoad'] = 'admin/investor-directory';
                $data['data'] = $this->investor_model->get_investor();
                $this->load->view('template/template', $data);*/
            }
            else
            {
                $this->index();
            }
        }
    }
    function showInvestor()
    {
        $config['base_url'] = base_url().'user_management/investor/showInvestor';
        $config['total_rows'] = $this->db->get('fb_investor')->num_rows();
        $config['per_page'] = 2;
        $config['num_link'] = 4;
        $config['attributes'] = array('class' => 'btn btn-default');
        $config['cur_tag_open'] = '&nbsp;<a class="btn btn-default">';
        $config['cur_tag_close'] = '</a>';
        $this->pagination->initialize($config);
        $this->load->model('credential_model/investor_model');
        $data['data'] = $this->investor_model->get_investor($config['per_page'], $this->uri->segment(4));
        $data["links"] = $this->pagination->create_links();
        /*print_r($data);
        exit();*/
        $data['fileToLoad'] = 'admin/investor-directory';
        $this->load->view('template/template', $data);
    }
    function edit_investor()
    {
        $id=$this->uri->segment(4);
        //echo $id;exit;
        $this->load->model('Common_model');
        $data['edit_data']= $this->Common_model->get_info('fb_investor',$id);
        $data['fileToLoad'] = 'admin/edit-investor';
        $this->load->view('template/template', $data);
        
    }
    public function update_data($id)
    {          
        $this->load->model('credential_model/investor_model');
        $id=$this->uri->segment(4);
        $this->investor_model->update_investor($id);
        redirect('user_management/investor/showInvestor');
        //$this->showInvestor();
        /*$data['fileToLoad'] = 'admin/investor-directory';
        $this->load->view('template/template', $data);*/
    //$this->session->set_flashdata('message', 'Your data updated Successfully..');
     //redirect('investor-directory');
    }
    public function delete_investor(){
        $id=$this->uri->segment(4);
        $this->load->model('Common_model');
        $this->Common_model->delete_record('fb_investor',$id);
        redirect('user_management/investor/showInvestor');
        //$this->showInvestor();
        
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