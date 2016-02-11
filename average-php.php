<?php
function compute_average($array)
{
	$number_of_values = count($array);
	$total = 0;
	foreach($array as $value)
	{
		$total = $total + $value;
	}
	$average = $total / $number_of_values;
}

$numbers = array(34, 5, 777, 33, 4, 5);

$average = compute_average($numbers);
echo $average;

?>