<?php
$A = array(2,4,10,16);
//$n = 0;
	function multiply($A,$n) {
	$B = array();
	foreach($A as $values)
	{
		$B[] = $values * $n;

	}

	var_dump($B);

	}
multiply($A,5);
?>