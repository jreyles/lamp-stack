<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Gold extends CI_Controller {
	protected $money = 0;
	public function __construct()
	{
		parent::__construct();
		$this->money = $this->session->set_userdata('money',0);
		$this->word = $this->session->userdata('word');
	}	
	public function index() 
	{
		$this->load->view('ninja_frontend');
	}
	public function process_money()
	{
		$money = $this->session->userdata('money');
		if($this->input->post()["building"] === "farm")
		{ 
			$rand = rand(10,20);
			$word = "<p style='color:green'>You won {$rand} from farm</p>";
			$money = $money + $rand;
			$this->money = $this->session->set_userdata('money', $money);
			$this->word = $this->session->set_userdata('word',$word);
			redirect('/');
		}
		elseif($this->input->post()["building"] === "cave")
		{
			$rand = rand(5,10);
			echo "cave";
			$word = "<p style='color:green'>You won {$rand} from farm</p>";
			$this->money = $this->session->set_userdata('money',$money + $rand);
			$this->word = $this->session->set_userdata('word',$word);
			//redirect('/');
		}
		elseif($this->input->post()["building"] === "house")
		{
			$rand = rand(2,5);
			echo "house";
			$word = "<p style='color:green'>You won {$rand} from farm</p>";
			$this->money = $this->session->set_userdata('money',$money + $rand);			//redirect('/');
			$this->word = $this->session->set_userdata('word',$word);
//			redirect('/');
		}
		elseif($this->input->post()["building"] === "casino")
		{
			echo "casino";
			$rand = rand(0,50);
			$gamble = rand(1,2);
			if($gamble == 1)
			{
				$word = "<p style='color:green'>You won {$rand} from farm</p>";
				$this->money = $this->session->set_userdata('money',$money + $rand);
				$this->word = $this->session->set_userdata('word',$word);
//			redirect('/');
			}
			else{
				$word = "<p style='color:red'>You lost {$rand} from farm</p>";
				$this->money = $this->session->set_userdata('money',$money - $rand);
				$this->word = $this->session->set_userdata('word',$word);
//			redirect('/');

			}
		}
	}
}
?>