<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Surveys extends CI_Controller {
	public function index() 
	{
		$this->load->view('home');
	}

	public function process_form()
	{
		if($this->input->post()) //to check if there are data submitted to the form; prevents adding the number of views when user just go to the link /survey/process
		{
			$count = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $count+1); // store this into the session
		
			$this->session->set_userdata('post_data', $this->input->post());
			redirect('/Surveys/result');
		}
		else
			redirect('/Surveys/index');
	}
	public function result()
	{
		$this->load->view('/result');
	}
}
?>