<?php 

session_start();
if (!isset($_SESSION['coord_id']) || $_SESSION['coord_id'] == '')
	header('Location: ../../Login/login_page.php');
?>

<!DOCTYPE html>
<html lang="en">
<title>Create Consultant</title>
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel = "stylesheet" href = "create_consultant.css">
	<script src = "create_consultant.js"></script>
	<script src="http://code.jquery.com/jquery-1.5.js"></script>
  	<script> 
  	$(document).ready(function(){
	   var $form = $('form');
	   $form.submit(function(){
	      $.post($(this).attr('action'), $(this).serialize(), function(response){
	      },'json');
	      alert("Consultant Created");
	      return false;
	   });
	});
	</script>

</head>
<body>

<div class = "container-fluid">
	<div class="row">
		<nav class="col-md-2">
			<ul class="nav nav-pills nav-stacked" data-spy="affix">
				<li class="dropdown">
					<a class="nav-link dropdown-toggle" class="active" data-toggle="dropdown" href="../create_consultant/form_consultant.php">Consultant<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="active"><a class="dropdown-item" href="../create_consultant/consultant_create.php">Create Consultant</a></li>
						<li><a class="dropdown-item" href="../display_consultant/consultant_display.php">Display Consultant</a></li>
						<li><a class="dropdown-item" href="../manage_consultant/manage_cnslt_page.php">Manage Consultant</a></li>
						<li><a class="dropdown-item" href="../form_consultant/consultant_form.php">Form 1A</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="../../Committee/create_committee/create_committee.html">Committee<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../../Committee/create_committee/create_page.php">Create Committee</a></li>
						<li><a href="../../Committee/display_committee/display_page.php">Display Committee</a></li>
						<li><a href="../../Committee/abolish_committee/abolish_page.php">Abolish Committee</a></li>
						<li><a href="../../Committee/modify_committee/modify_page.php">Modify Committee</a></li>
						<li><a href="../../Committee/download_committee/download_page.php">Committee Form</a></li>
					</ul>
				</li><br><br>
				<div class="row" align="center"><input type="button" value="Logout" onclick="document.location.href='../../Login/logout.php'"></div>
			</ul>
		</nav>
		
		<form action = "create_consultant.php" method = "post" id = "consultant_form_creation">
		<div class="col-md-10">
			<div class = "page-header">
				<h2>Create Consultant</h2>
			</div>
			<?php include '../consultant_fields.php';?>
			<input type = "submit" value="Submit">
		</div>
	</div>
</div>

</form>

</body>
</html>