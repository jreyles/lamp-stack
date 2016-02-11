<?php 
session_start();
	$_POST['number'] = intval($_POST['number']);
	$_SESSION['user_value'] = $_POST['number'];	

	if($_POST['number'] < $_SESSION['answer']){
		$_SESSION['compare'] = 'low';
		header('Location: great-number-game.php');
	}
	if($_POST['number'] > $_SESSION['answer']){
		$_SESSION['compare'] = 'high';
		header('Location: great-number-game.php');
	}
	if($_POST['number']==$_SESSION['answer']){
		$_SESSION['compare'] = 'same';
		header('Location: great-number-game.php');		
	}	
	if(isempty($_SESSION['answer']))
	{	
		header('Location: great-number-game.php'); 
	}

 	header('Location: great-number-game.php'); 
 ?>
