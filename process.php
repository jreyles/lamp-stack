<!DOCTYPE html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<p>Submitted Information</p>
	<p>Your name is: <?= $_POST['name']; ?></p>
	<p>Your dojo location <?= $_POST['location']; ?></p>
	<p>Your favorite language is: <?= $_POST['language']; ?></p>
	<p>Comment: <?= $_POST['comments']; ?></p>
</body>

</html>