<?php
class Agent extends CI_Controller
{
	function loadView()
	{
		$data['fileToLoad'] = 'admin/agent-directory';
		$this->load->view('template/template',$data);
	}
}

?>