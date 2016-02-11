<?php 
//Selection Sort Algorithm
$time_start = microtime(true);
function selection_sort($arr){
	 //Blue starter
	$temp = $arr[1];
	$min = $arr[0];
	foreach($arr as $key => $values) {
		$min = $arr[$key];
		for($i=$key;$i <count($arr);$i++) // Red
		{

			if($arr[$i] < $min) 
			{
				$min = $arr[$i];
				$min_index = $i;
			}
		}
		//Swap red with current list		
		$temp = $arr[$key];
		$arr[$min_index] = $temp;
		$arr[$key] = $min;
//		$min = $arr[$key+1];
	}
	var_dump($arr);
}
$test_array = array();
for($i<0;$i <= 100;$i++)
{
	array_push($test_array,rand(1,10000));
//	microtime(selection_sort())
}

selection_sort($test_array);
$time_end = microtime(true);

$time = $time_end - $time_start;

echo "Time selection sort algorithm took was $time seconds";

?>



