<?php 

function swap(&$x,&$y){
	$temp = $x;
	$x = $y;
	$y = $temp;
};

function insertion_sort($arr){
//Base case
$first = $arr[0];
$second = $arr[1];
if($arr[1]<$arr[0]){
	swap($first,$second);
	$arr[0] = $first;
	$arr[1] = $second;
}

//Induction Hypothesis add 2
foreach($arr as $keys => $values)
{ //keys + 2 is current key
	for($i=$keys+2; $i<count($arr);$i++) //Traverse throughout the array
	{
		for($j=$keys+2;$j==0;$j--)
		{
			if($arr[$keys+2]<$arr[$j])
			{
				// swap variables
//				swap($arr[$j],$arr[$keys+2]);
				$temp = $arr[$j];
				$arr[$j] = $arr[$keys+2];
				$arr[$keys+2] = $temp;
			}
		}

	}
}
var_dump($arr);
}


$test_array = [6,5,3,1,8,7,2,4];
insertion_sort($test_array);

?>