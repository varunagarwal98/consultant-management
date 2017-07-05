<?php 

session_start();
if (!isset($_SESSION['coord_id']) || $_SESSION['coord_id'] == '')
	header('Location: ../../Login/login_page.php');
?>

<!DOCTYPE html>
<html>
<title>Committee Bank/Display Committee</title>
<head lang = "en">
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<link rel = "stylesheet" href = "abolish_committee.css">
	<script src = "abolish_committee.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="col-sm-2">
	<ul class="nav nav-pills nav-stacked" data-spy="affix">
		<li class="dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="../../Consultant/create_consultant/create_consultant.html">Consultant<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="../../Consultant/create_consultant/consultant_create.php">Create Consultant</a></li>
				<li><a class="dropdown-item" href="../../Consultant/display_consultant/consultant_display.php">Display Consultant</a></li>
				<li><a class="dropdown-item" href="../../Consultant/manage_consultant/manage_cnslt_page.php">Manage Consultant</a></li>
				<li><a class="dropdown-item" href="../../Consultant/form_consultant/consultant_form.php">Form 1A</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a class="nav-link dropdown-toggle" class="active" data-toggle="dropdown" href="../../Committee/create_committee/create_committee.html">Committee<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="../../Committee/create_committee/create_committee.html">Create Committee</a></li>
				<li><a href="../../Committee/display_committee/display_committee.html">Display Committee</a></li>
				<li class="active"><a href="../../Committee/abolish_committee/abolish_page.php">Abolish Committee</a></li>
				<li><a href="../../Committee/modify_committee/modify_committee.html">Modify Committee</a></li>
			</ul>
		</li><br><br>
		<div class="row" align="center"><input type="button" value="Logout" onclick="logout()"></div>
	</ul>
</div>

<div class="col-sm-10">
	<div class="page-header">
		<h2>Abolish Committee</h2>
	</div>
	<div class="row">
		<h4>Select Committee</h4>
	</div>
	<div class="row">
		<div class="col-md-5">Committee ID: <input type = "number" name = "com_id" id = "com_id">
			<input type = "button" value = "Get Data" onclick="go(<?php echo $_SESSION['coord_id'];?>)">
			<br><br>
			<input type="button" value="Abolish" id="abolish" disabled onclick="abolish()">
		</div>
	</div>
	<div>
		<br><br>
		<table id="table"></table>
	</div>
</div>

</body>
</html>