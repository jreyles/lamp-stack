<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="board.css">
</head>
<body>
<div id="checkerboard">
<?php for($i=1;$i<=8;$i++) { ?>
	<div>
<?php for($j=1; $j<=4;$j++) { ?> <!-- start of copying -->
		<?php if($i%2===0) {?>
		<div class='black'></div><div class='red'></div>		
		<?php } else {?> 
		<div class='red'></div><div class='black'></div>
		<?php }?>
	<?php }?><!-- Div 4 times-->
	</div>
<?php }?> <!-- Div 8 times -->
	</div>
</div> <!-- End of board -->

</body>
</html>