<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//echo "Testing 123";
class Times extends CI_Controller {
//	echo "Hello World!";
//	public function __construct()
//	{
//		parrent::__construct();
//		$this->output->enable_profiler();
//	}
	public function index() 
	{
		$date = array(date("M d, Y, H:i:s")); // Variable containing current date and time
		$this->session->set_userdata('date',$date); // add the date...
		var_dump($date);
//		$this->load->view('welcome_message');
		$this->load->view('index', array('date' => $this->session->userdata('date')));
//		redirect('/'); // Will use this..
	}
	public function hello($id)
	{
		echo "hello world: {$id}";
	}
}
?>