<?php


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS','root'); // using MAC so I keep root
define('DB_DATABASE','twitter');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

// Make sure connection is good or die
if(mysqli_connect_errno())
{
	die("Failed to connect to mySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_ );
}

function fetch($query)
{
	global $connection;

	$result = mysqli_query($connection,$query);
	$rows = array();

	foreach($result as $row) {
		$rows[] = $row;
	}
	return $rows;
}



function run_mysql_query($query)
{
	global $connection;


}

?>
