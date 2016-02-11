<?php
session_start();
require('connection.php');
$name = $_POST["name"];
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
	{
  		$nameErr = "Only letters and white space allowed";
	}
//var_dump($_POST);
	else {
//	$_SESSION['name'] = $_POST['name'];
//	$_SESSION['quote'] = $_POST['quote'];
//	$_SESSION['date'] = DATETIME();
//	run_mysql_query($add)
	$insert = "INSERT INTO `quotingdojo`.`quotes` (`quote`,`name`,`date`) VALUES('{$_POST['quote']}','{$_POST['name']}','NOW()' )";
	run_mysql_query($insert);
	$query = "SELECT name,quote, date FROM quotes";
	$quotes = fetch_all($query);
	foreach($quotes as $keys => $rows)
	{
//		$_SESSION['name'] = 
		$_SESSION['name'] = $rows['name'];
		$_SESSION['quote'] = $rows['quote'];
		$_SESSION['date'] = $rows['date'];
		echo "{$_SESSION['name']} , {$_SESSION['quote']}, {$_SESSION['date']} <p>";
	}
}

//header('main.php')
?>
