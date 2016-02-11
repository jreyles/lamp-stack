<?php 
$score = rand(50,100);

function grade($score) {
if ($score < 70) {
	echo "D";
	} elseif ($score >= 70 && $score < 80) {
		echo "C";
	} elseif ($score >= 80 && $score < 90){
		echo "B";
	} elseif ($score >= 90 && $score ==100){
		echo "A";
}
}

echo "<h2>Your score: " . $score . "/100</h2><br>";
echo " grade: ". grade($score);

?>