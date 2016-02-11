<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Random extends CI_Controller {
//class Welcome extends CI_Controller {
//	public function __construct() 
//	{
//		parent::__construct();
//		$this->output->enable_profiler();
//	}
	protected $count = 0;
public function __construct()
	{
		parent::__construct();
		$this->count = $this->session->userdata('counter');
		$this->word = $this->session->userdata('random_gen');
	}	
	public function index()
	{
		// check for existence of counter
		$this->load->view('random_home');
	}
	public function randomize() 
	{
//		if($) {
	if($this->count)
			$this->count++;
		else
			$this->count = 1;
			$word = substr(str_shuffle(md5(time())),0,14);
//			$count = $this->session->userdata('counter');
			$this->session->set_userdata('counter',$this->count);
//			$random_string = $this->session->userdata('random_gen');
			$this->session->set_userdata('random_gen',$word);
//			$this->load->view('random_home');
			redirect(base_url());
//			redirect('/');
//	}
//		else
//		{
//			$this->load->view('random_home');
//			redirect('Random/index');
//		}
//		$this->session->set_userdata('random_gen',string_gen());
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>