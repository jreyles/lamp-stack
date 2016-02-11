<?php

	$sample = array(135,2.4,2.67,1.23,332,2,1.02);

	function get_max_and_min($a) {
		$max = $a[0];
		$min = $a[0];
		foreach($a as $values){
			if($values > $max){
				$max = $values;}
			elseif($values < $min){
				$min = $values;
			}

		}
		$output['max'] = $max;
		$output['min'] = $min;
		return $output;

	}
	$output = get_max_and_min($sample);
	var_dump($output);


	//$output should be equal to array('max' =>)

?>