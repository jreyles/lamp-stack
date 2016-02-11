<?php  
$users['first_name'] = "Michael";
$users['middle_name'] = "Chong";
$users['last_name'] = "Choi";

function pass($usrdb)	{
	echo "There are " . count($usrdb) . " in this array: ";
	foreach($usrdb as $values) {
		echo key($usrdb) . ", ";
		next($usrdb);
	}
	echo "<br>";
	foreach($usrdb as $values) {

	echo "The value in the key " . key($usrdb) . " is " . $values . "<br>"; 
	next($usrdb);
	}

}
pass($users);
?>