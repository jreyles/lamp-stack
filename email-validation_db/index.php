<?php
session_start();
require('new-connection.php');
if(!isset($_SESSION['email']))
{
	$_SESSION['email']=[];
}
// email
// first_name
// last_name
// password
// confirm_passowrd
// birth_date
// profile_picture
?>
<!DOCTYPE html>
<html lang='en'>
<head>
</head>
<body>
	<h1>E-Mail Validation</h1>
	<p>Enter E-Mail Address: </p>
		 	<form action="process.php" method="post">
		 	<input type="text" name="email"> <br>
	 		<input type="button" value="submit">
		</form>
</body>
</html>