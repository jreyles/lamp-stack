<?php


function print_average($array)
{
	$number_of_values = count($array);
	$total = 0;
	foreach($array as $value)
	{
		$total = $total + $value;
		echo $total.'<br>';
	}
}

#$numbers = array(10,10,10);
$numbers = array(34, 5, 777, 33, 4, 5);

$average = compute_average($numbers);
echo $average;

?>