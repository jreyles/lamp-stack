<?php 
	$states = array('CA','WA','VA','UT','AZ');
	echo "Dropdown menu (for loop) <br> <select>";
	for($i = 0; $i <= count($states);$i++){

		echo "<option>" . $states[$i] . "</option>";

	}
	echo "</select></br>";
	echo "Dropdown menu foreach <br>";
	echo "<select>";
	foreach($states as $values){
		echo "<option>" . $values . "</option>";
	}
	echo "</select>";

 ?>