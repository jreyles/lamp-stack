<?php
session_start();
require('new-connection.php');
$_SESSION["email"] = $_POST["email"];
//var_dump($_POST);
//var_dump($_SESSION);
//$sql = "INSERT INTO email ('emailaddress','date') VALUES ('{$_SESSION["email"]}',NOW())";
//$result = mysql_query($sql);
//echo $result;
if(!filter_var($_SESSION["email"],FILTER_VALIDATE_EMAIL) === false)
{
	echo "{$_SESSION["email"]} is a valid email address <p>";
	$query = "SELECT emailaddress, date FROM email";
	$emails = fetch_all($query);
	foreach($emails as $keys => $rows)
	{
		echo "{$rows['emailaddress']} , {$rows['date']} <p>";

	}
//	$emails = run_mysql_query($query);
//	$emails['']
//	$row = $mysqli_fetch_assoc($emails);
//	foreach($emails as $rows)
//	{
//		$emails //run $mysqlquery
//	}
//	var_dump($emails);
//	var_dump($row);
//	header('success.php')
} else {
	echo "{$_SESSION["email"]} is not a valid email address";	
}
//mysql_free_result($result);
//echo $result;
//var_dump();
?>