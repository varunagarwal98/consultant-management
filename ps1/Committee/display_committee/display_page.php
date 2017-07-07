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
	<link rel = "stylesheet" href = "display_committee.css">
	<script src = "display_committee.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
	<div class="col-md-2">
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
					<li><a href="../../Committee/create_committee/create_page.php">Create Committee</a></li>
					<li class="active"><a href="../../Committee/display_committee/display_page.php">Display Committee</a></li>
					<li><a href="../../Committee/abolish_committee/abolish_page.php">Abolish Committee</a></li>
					<li><a href="../../Committee/modify_committee/modify_page.php">Modify Committee</a></li>
					<li><a href="../../Committee/download_committee/download_page.php">Committee Form</a></li>
				</ul>
			</li><br><br>
			<div class="row" align="center"><input type="button" value="Logout" onclick="document.location.href='../../Login/logout.php'"></div>
		</ul>
	</div>

	<div class="col-md-10">

		<div class="page-header"><h2>Display Committee<h2></div>
		
		<div class="row"><h3>Input</h3></div>
		<br>
		<div class="row">
			<div class="col-md-3">
			<label class="control-label" for="create_committee">Committee ID:</label>
			</div>
			<div class="col-md-4">
				<input type = "num" class="form-control" name="com_id"><br>
			</div>
		</div>
		
		<div class="row">
			<label class="control-label col-md-3" for="create_committee">Committee Type:</label>
			<div class="col-md-4">
				
				<select class="form-control" name = "com_type">
					<option value = ""></option>
					<option value = "Partial">Standing Committee</option>
					<option value = "Complete">Regular Committee</option>
				</select><br>

			</div>
		</div>
		
		<div class="row">
			<label class="control-label col-md-3" for="create_committee">Committee Category:</label>
			<div class="col-md-4">

				<select class="form-control" name = "com_cat">
					<option value = ""></option>
					<option value = "ADC">ADVISORY COMMITTEE</option>
					<option value = "IMC">INTERNAL MANAGEMENT</option>
					<option value = "LC">LICENSING COMMITTEE</option>
					<option value = "PSDR">PROJECT SAFETY DESIGN / DESIGN REVIEW COMMITTEE</option>
					<option value = "SC">SAFETY COMMITTEE</option>
					<option value = "SEC">SELECTION COMMITTEE</option>
					<option value = "SIEC">SITE EVALUATION COMMITTEE</option>
					<option value = "SPC">SPECIALISTS GROUP</option>
					<option value = "SRC">SAFETY REVIEW COMMITTEE</option>
					<option value = "STC">STANDING COMMITTEE</option>
					<option value = "TARC">TECHNICAL ASSESSMENT	AND REVIEW COMMITTEE</option>
					<option value = "TFC">TASK FORCE</option>
					<option value = "WGC">WORKING GROUP</option>
					<option value = "EXG">EXPERTS GROUP</option>
				</select><br>

			</div>
		</div>
		<div class="row">
			<label class="control-label col-md-3" for="create_committee">Committee Abbreviation:</label>
			<div class="col-md-4">

				<input type = "text" class="form-control" name="com_abr"><br>
			</div>
 		</div>
		
		<div class="row">
			<label class="control-label col-md-3" for="create_committee">Committee Status:</label>
			<div class="col-md-4">

				<select class="form-control" name = "com_stat">
					<option value = "">New</option>
					<option value = "AC">Active</option>
					<option value = "IN">Inactive</option>
				</select><br>

			</div>
		</div>
		<div class="row">
			<label class="control-label col-md-3" for="create_committee">Comm. Processing Status:</label>
			<div class="col-md-4">

				<select class="form-control" name = "com_proc_status">
					<option value=""></option>
					<option value = "SD">Saved As Draft</option>
					<option value = "PR">Propsed</option>
					<option value = "RH">Rejected by HOD</option>
					<option value = "RG">Registered</option>
					<option value = "SA">Processed by Admin</option>
					<option value = "">New</option>
					<option value = "AB">Abolished</option>
					<option value = "PA">Propose to Abolished</option>
				</select><br>

			</div>
		</div>
		<div class="row">
			<input type="button" value="Get Committees" onclick="get_com()">
		</div>

		<div class="row">
				<br><h3>Committee Data</h3>
				<div> <table id = "com_table"></table></div>
		</div>

	</div>
</div>

</body>
</html>
