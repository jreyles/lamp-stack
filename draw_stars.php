<?php 
//	$x = array(4,6,1,3,5,7,25);
	$x = array(4,"Tom",1,"Michael",5,7,"Jimmy Smith");
	function draw_stars($array) {
		foreach($array as $values)
		{
			if(is_numeric($values)){
					for($i = 1; $i <= $values; $i++) {
						echo "*";
					}
					echo "<br>";
					}
					else {
					for($i = 1; $i <= strlen($values); $i++) {
						echo strtolower(d);
					}
					echo "<br>";
					}

	}
} // End of function
	draw_stars($x);

?>