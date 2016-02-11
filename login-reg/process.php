<?php
	session_start();
	require('connection.php');
	if(isset($_POST['action']) && $_POST['action'] == 'register')
	{
		//call to function
		register_user($_POST); //use the actual post
//		var_dump($_POST);
	}
	elseif(isset($_POST['action']) && $_POST['action'] == 'login')
	{
		login_user($post);
//		var_dump($_POST);
	}
	else // malicious navigation to process.php OR someone is trying to log off
	{
//		session_destroy();
//		header('location: index.php');
//		die();
	}
	function register_user($post) //just a parameter called post
	{
		$_SESSION['errors'] == array();
		if(empty($post['first_name']))
		{
			$_SESSION['errors'][] = "first name can't be blank"; 
		}
		if(empty($post['last_name']))
		{
			$_SESSION['errors'][] = "last name can't be blank"; 
		}
		if(empty($post['password']))
		{
			$_SESSION['errors'][] = "password field must not be blank"; 
		}
		if($post['password'] !== $post['confirm_password'])
		{
			$_SESSION['errors'][] = "passwords must match!"; 
		}
		if(!filter_var($post['email'],FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['errors'][] = "please use a valid email address!"; 
		}
		if(count($_SESSION['errors']) > 0) // if I have any errors at all....
		{
			header('location: index.php');
			die();
		}
		else
		{
			$query = "INSERT INTO users (first_name, last_name, password, email, created_at, updated_at) VALUES ('{$post['first_name']}','{$post['last_name']}','{$post['password']}','{$post['email']}',NOW(),NOW())";
			run_mysql_query($query);
			$_SESSION['success_message'] = 'User successfully created!';
			header('location: index.php');

		}		

//		var_dump($_SESSION);
		header('location: index.php');
		die();
	}
	function login_user($post) //just a parameter called post
	{
		$query = "SELECT * FROM users WHERE users.password = '{post['password']}' 
				  AND users.email = '{$post['email']}'";
		$user = fetch_all($query);
		echo $user;
		if(count($user) > 0){

			$_SESSION['user_id'] = $user[0]['id'];
			$_SESSION['first_name'] = $user[0]['first_name'];
			$_SESSION['logged_in'] = TRUE;
			header('location: success.php');

		}
		else
		{
//			$_SESSION['errors'][] = array();
			$_SESSION['errors'][] = "can't find a user with those credentials";
//			header('location: index.php');
//			die();
		}
		echo $query;
//		die();
	}
?>