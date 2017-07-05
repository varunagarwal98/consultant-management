<?php 

session_start();
if (!isset($_SESSION['coord_id']) || $_SESSION['coord_id'] == '')
	header('Location: ../../Login/login_page.php');
?>

<!DOCTYPE html>
<html>
<title>Consultant Bank/Display Consultant</title>
<head lang = "en">
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel = "stylesheet" href = "display_consultant.css">
  	<script type="text/javascript" src="display_consultant.js"></script>
  	
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
						<li class="active"><a class="dropdown-item" href="../display_consultant/consultant_display.php">Display Consultant</a></li>
						<li><a class="dropdown-item" href="../manage_consultant/manage_cnslt_page.php">Manage Consultant</a></li>
						<li><a class="dropdown-item" href="../form_consultant/consultant_form.php">Form 1A</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="../../Committee/create_committee/create_committee.html">Committee<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../../Committee/create_committee/create_committee.html">Create Committee</a></li>
						<li><a href="../../Committee/display_committee/display_committee.html">Display Committee</a></li>
						<li><a href="../../Committee/abolish_committee/abolish_committee.html">Abolish Committee</a></li>
						<li><a href="../../Committee/modify_committee/modify_committee.html">Modify Committee</a></li>
					</ul>
				</li><br><br>
				<div class="row" align="center"><input type="button" value="Logout" onclick="document.location.href='../../Login/logout.php'"></div>
			</ul>
		</div>
		<div class="col-md-10">
			<div class="page-header">
				<h2>Consultant Details</h2>
			</div>
			<div class="row">
				<h4>Selection</h4>
			</div>

			<div class="row">
				<div class="col-md-3">Consultant No: </div>
				<div class="col-md-4"><input type = "number" name = "cnslt_id" id="cnslt_id"></div>
			</div>
			<div class="row">
				<div class="col-md-3">Cons. First Name: </div>
				<div class="col-md-4"><input type = "text" name = "f_name" id = "f_name"></div>
			</div>
			<div class="row">
				<div class="col-md-3">Cons. Last Name: </div>
				<div class="col-md-4"><input type = "text" name = "l_name" id = "l_name"></div>
			</div>
			<div class="row">
				<div class="col-md-3">Consultant Type: </div>
				<div class="col-md-4"><select name = "cnslt_type" id = "cnslt_type">
								<option value = ""></option>
								<option value = "SP">Specialist</option>
								<option value = "EX">Expert</option>
								<option value = "CN">Consultant</option>
							</select></div>
			</div>

			<div class="row">
				<div class="col-md-3">Co-Ordinator:  </div>
				<div class="col-md-4"><input type = "number" name = "coord_id" id = "coord_id"></div>
			</div>
			<div class="row">
				<div class="col-md-3">Consultant Status: </div>
				<div class="col-md-4"><select name = "cnslt_status" id = "cnslt_status">
									<option value = "">Undefined</option>
									<option value = "A">Active</option>
									<option value = "I">Inactive</option>
								</select></div>
			</div>

			<div class="row">
				<div class="col-md-3">Processing Status: </div>
			</div>		
			<div class="row">
			<br><input type = "button" value="Get Consultants" onclick="get_consultants()">
			
			</div>
			<div class="row">
				<br><h4>Consultant Data</h4>
				<div> <table id = "consultant_table"></table></div>
			</div>
		</div>
	</div>
</div>

</body>
</html>