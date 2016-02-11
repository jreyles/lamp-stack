<?php

$A = array(2,3,"hello");
	function print_lists($A) {
		echo "<ul>";
	foreach($A as $values) {
		echo "<li>" . $values . '</li>';

	}
		echo "</ul>";
	} // end of print_lists
print_lists($A);

?>