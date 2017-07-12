<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<title>Login</title>
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel = "stylesheet" href = "create_consultant.css">
	<script src = "create_consultant.js"></script>
</head>

<body>
<form action = "login.php" method = "post" id = "consultant_form_creation">

<div class = "container-fluid">
	<div class="row">
		<div class = "page-header" align="center">
			<h2>Login</h2>
		</div>
	</div>
	<div class="well" align="center">
		<h4>Username: <input type="number" name="coord_id" required></h4><br>
		<h4>Password: <input type="password" name="pass" required></h4>
	</div>

	<div id="errMsg">
        <?php
        	if(isset($_SESSION['errMsg']))
        	{
        		echo '<script>';
        		echo 'alert("Incorrect Username or Password")';
    	    	echo '</script>';
    	    	unset($_SESSION['errMsg']);
    	    }
    	?>
    </div>

	<div class="well" align="center">
		<input type="submit" value="Login">
	</div>
</div>

</form>
</body>
</html>
