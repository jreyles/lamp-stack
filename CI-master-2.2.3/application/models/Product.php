<?php
class Product extends CI_Model 
{

public function all()
{
	return $this->db->query("SELECT * FROM products")->result_array();
}
function create($post)
{
	$query ="INSERT INTO products (name,description, price, created_at) VALUES (?,?,?,NOW())";
	$values = array(
			$post['name'],
			$post['description'],
			$post['price'],
			NOW()
		);
}
function find_by($id)
{
	$query = "SELECT * FROM products where ID = ?";
	$values = array($id);
}

}

?>