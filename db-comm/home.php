<?php
	require('new-connection.php');
//	$query = "SELECT * FROM people";
//	$people = fetch($query);
	$people = mysqli_query($connection,"SELECT * FROM people");	
//	$people = mysql_($)
//	var_dump($people);
//	echo $people['first_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
    foreach($people as $person)
    {
//    	var_dump($person);
//		echo $person['first_name'] . "<br>";
//    	echo $person['first_name'];
	}
?>
</body>
</html>
