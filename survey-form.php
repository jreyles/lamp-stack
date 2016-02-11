<!DOCTYPE html>
<head>	
<link rel="stylesheet" type="text/css" href="survey-form.css"> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
<div class="detailBox" >
<table>
	<form action='process.php' method='post'>
	<tr>
    	<td>Your Name:<input type='text' name='name'></td>
    </tr>
    <tr>
    	<td>Dojo Location:
    		<select name='location'>
    			<option value="mtview">Mountain View</option>
    			<option value="seattle">Seattle</option>
    			<option value="la">Los Angeles</option>
	    	</select>
	    </td>
    </tr>
    	<td>Favorite Language: 
    		<select name='language'>
    			<option value="Javascript">Javascript</option>
    			<option value="PHP">PHP</option>
    			<option value="Python">Python</option>
    		</td>
	    	</select>
    <tr>
        <td>Comment (optional): 
        <p><textarea type='text' name='comments'></textarea></p></td>
    <tr>
    	<td><input type='submit' value='submit'></td>
    </tr>
	</form>
<table>
</div>
</body>


<?php




?>



</html>

