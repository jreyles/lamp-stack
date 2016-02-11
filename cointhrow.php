<?php 
// Make counter files

	$head = 0;
	$tails = 0;
	function heads_tails($state){
		if($state==0) {
			echo "head!";
		} elseif($state==1) {
			echo "tails!";
		}
	}
					
	

	function coingame() {
	for($i = 1; $i <= 5000; $i++){
		$coin = rand(0,1);

		if($coin==0){
				$head++;
			} elseif($coin==1){
				$tails++;
		}
		echo "Attempt #" . $i . ": Throwing a coin... It's a ";
		heads_tails($coin);
		echo " Got " . $head . "head(s) so far and " . $tails . "tail(s) so far.<br>";
	}
}

coingame();
?>