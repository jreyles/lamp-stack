<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Survey Form</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div id="container">
	<div id="body">
		<div class="alert alert-info">
		<p>Random Word attempt # <?php echo "{$this->session->userdata('counter')}"; ?></p>

<?php 	if($this->session->userdata('random_gen'))
			echo "<h1>{$this->session->userdata('random_gen')}</h1>";		
		else
			echo "<p>Please click the button below to generate Random Word.</p>";?>
	</div>
	<form action = "/Random/randomize" method="post">
		<input type = "hidden" name="word" value="<?php $this->session->userdata('random_gen');?>">
		<input type="submit" value="generate">
	</form>
	</div>
</div>
</body>
</html>
