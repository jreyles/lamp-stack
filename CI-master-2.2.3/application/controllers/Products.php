<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Products extends CI_Controller {
	public function index() 
	{
		$this->load->view('products_home');
	}
	public function newish()
	{

		$this->load->view('products_new');
	}
	public function edit()
	{
		$this->load->view('products_edit');
	}
	public function show($id)
	{
		echo "{$id}";
		die();
		$this->load->view('products_show');
	}
		public function create() 
	{
		$post = $this->input->post();
		$this->Product->create($post);
		//$this->load->model(create());
	}
	public function destroy($id) //routing
	{
		$this->Product->delete_item($id);
		$this->index();
	}
	public function update($id) //routing
	{
		$post = $this->input->post();
		$this->Product->edit($pst, $id);
		$this->show($id);
	}

}
?>