<?php 
	session_start();
	session_destroy(); 
	if(!array_key_exists('gold',$_SESSION))
	{
		$_SESSION['gold'] = 0;
		$_SESSION['log'] = array("2");
	}
//	var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
test {
    overflow: scroll;
}
</style>
</head>
<body>
	<div>Your Gold <?= $_SESSION['gold']?> </div>
	<div>
		Farm (earn 10-20 golds) 	
		<form action="process.php" method="post">
			<input type="hidden" name="building" value="farm"/>
			<input type="submit" value="Find Gold!"/>
		</form>
	</div>
	<div>
		Cave (earns 5-10 golds)
		<form action="process.php" method="post">
			<input type="hidden" name="building" value="cave"/>
			<input type="submit" value="Find Gold!"/>
		</form>
	</div>
	<div>
		House (earns 2-5 golds)
		<form action="process.php" method="post">
			<input type="hidden" name="building" value="house"/>
			<input type="submit" value="Find Gold!"/>
		</form>
	</div>
	<div>
		Casino! (earns/takes 0 - 50 golds)
		<form action="process.php" method="post">
			<input type="hidden" name="building" value="casino"/>
			<input type="submit" value="Find Gold!"/>
		</form>
	</div>
	<div class="test">
		<?php 
		foreach($_SESSION['log'] as $keys => $values)
		{
			echo "<p> " . $values . "</p>";
		}
		?>
	</div>
</body>
</html>