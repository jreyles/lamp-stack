<?php session_start(); 
		if(!array_key_exists('answer',$_SESSION)){
			$_SESSION['answer']=rand(1,100);
		}
		var_dump($_SESSION);		
?>
<?= session_id();?>

<!DOCTYPE html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
</script>
</head>
<body class="container centered">	
	<div class="centered">
		<div><h1> Welcome to the Great Number Game!</h1></div>
        <div><p>I am thinking of a number between 1 and 100</p></div>
		<div><p>Take a guess!</p></div>

<?php
	if(!array_key_exists('user_value',$_SESSION)){
		echo "Begin!";
	}		
	else if($_SESSION['user_value'] < $_SESSION['answer']){
//		$_SESSION['compare'] = 'low';
		echo "low!";
	}
	if($_SESSION['user_value'] > $_SESSION['answer']){
		echo "high!";
	}
	if($_SESSION['user_value']==$_SESSION['answer']){
		echo "Correct!";
		echo "<button><a href='great-number-game.php'>Play Again!</a></button>";
		session_destroy();	
	}
?>
		<form>
			<input type="hidden" name="action" value="register">
		</form>

	 	<form action="sessions.php" method="post">
		 	<input type="number" name="number"> 
	 		<input type="button" value="submit">
		</form>
	 </div>
</body>

</html>