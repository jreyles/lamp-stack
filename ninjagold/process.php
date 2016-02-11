<?php 
	session_start();
//	header('Location: index.php');
//	$_SESSION[''];
//	var_dump($_POST);
	var_dump($_SESSION);
	$_SESSION['building'] = $_POST['building'];
	if($_SESSION['building'] == 'farm')
	{
		$_SESSION['money']  = rand(10,20);
		$_SESSION['gold'] = $_SESSION['gold'] + $_SESSION['money'];
		$_SESSION['worth'] =  $money;
		$_SESSION['value'] = 'earned';
	$output = strval("You entered a " . $_SESSION['building'] . " and " . $_SESSION['value'] . " " . $_SESSION['gold'] . " golds. " . date("l jS \of F Y h:i:s A"));
	array_push($_SESSION['log'] ,$output);
	echo $output; 	
	var_dump($_SESSION['log']);
	header('Location: index.php');
	}
	if($_SESSION['building'] == 'cave')
	{	
		$_SESSION['money']  = rand(5,10);
		$_SESSION['gold'] = $_SESSION['gold'] + $_SESSION['money'];
		$_SESSION['value'] = 'earned';
	$output = strval("You entered a " . $_SESSION['building'] . " and " . $_SESSION['value'] . " " . $_SESSION['gold'] . " golds. " . date("l jS \of F Y h:i:s A"));
	array_push($_SESSION['log'] ,$output); 	
	header('Location: index.php');
	}
	if($_SESSION['building'] == 'house')
	{
		$_SESSION['money'] = rand(2,5);
		$_SESSION['gold'] = $_SESSION['gold'] + $_SESSION['money'];	
		$_SESSION['value'] = 'earned';
	$output = strval("You entered a " . $_SESSION['building'] . " and " . $_SESSION['value'] . " " . $_SESSION['gold'] . " golds. " . date("l jS \of F Y h:i:s A"));
	array_push($_SESSION['log'] ,$output); 	
	header('Location: index.php');	
}

	if($_SESSION['building'] == 'casino')
	{	
		$money = rand(-50,50);
		if($money < 0 )
		{
			$_SESSION['gold'] = $_SESSION['gold'] + $_SESSION['money'];	
			$_SESSION['value'] = 'lost';
		} 
		else 
		{
			$money = rand(-50,50);
			$_SESSION['gold'] = $_SESSION['gold'] + $_SESSION['money'];
			$_SESSION['value'] = 'earned';			
		}
	$output = strval("You entered a " . $_SESSION['building'] . " and " . $_SESSION['value'] . " " . $_SESSION['gold'] . " golds. " . date("l jS \of F Y h:i:s A"));
	array_push($_SESSION['log'] ,$output); 	
	header('Location: index.php');
	}
?>