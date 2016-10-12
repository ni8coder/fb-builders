<?php
class Panel extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}
	function admin_panel()
	{
		$data['fileToLoad'] = 'admin/index';
		$this->load->view('template/template',$data);
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