<?php 

session_start();
if (!isset($_SESSION['coord_id']) || $_SESSION['coord_id'] == '')
	header('Location: ../../Login/login.html');
?>

<!DOCTYPE html>
<html>
<title>Consultant Form 1A</title>
<head lang = "en">
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel = "stylesheet" href = "form_consultant.css">
  	
</head>
<body>

<div class = "container-fluid">
	<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked" data-spy="affix">
				<li class="dropdown">
					<a class="nav-link dropdown-toggle" class="active" data-toggle="dropdown" href="../create_consultant/form_consultant.php">Consultant<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="../create_consultant/consultant_create.php">Create Consultant</a></li>
						<li><a class="dropdown-item" href="../display_consultant/consultant_display.php">Display Consultant</a></li>
						<li class="active"><a class="dropdown-item" href="../manage_consultant/manage_cnslt_page.php">Manage Consultant</a></li>
						<li><a class="dropdown-item" href="../form_consultant/consultant_form.php">Form 1A</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="../../Committee/create_committee/create_committee.html">Committee<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../../Committee/create_committee/create_committee.html">Create Committee</a></li>
						<li><a href="../../Committee/display_committee/display_committee.html">Display Committee</a></li>
					</ul>
				</li><br><br>
				<div class="row" align="center"><input type="button" value="Logout" onclick="document.location.href='../../Login/logout.php'"></div>
			</ul>
		</div>
		<div class="col-md-10">
			<div class="page-header">
				<h2>Consultant Form 1A</h2>
			</div>
		</div>
	</div>
</div>
</body>
</html>