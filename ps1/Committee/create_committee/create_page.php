<?php

session_start();
if (!isset($_SESSION['coord_id']) || $_SESSION['coord_id'] == '')
	header('Location: ../../Login/login_page.php');
?>
<!DOCTYPE html>
<html lang = en>
<title>Create Committee</title>
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<link rel = "stylesheet" href = "create_committee.css">

	<script src = "create_committee.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- <script >
		$('#source_table tbody tr td input.checkbox:not(:checked)').on('change', function (e) {
     	var row = $(this).closest('tr').html();
     	$('#dest_table tbody').append('<tr>'+row+'</tr>');
	});
	</script>
	<script>
		$('button').on('click', function(){
    	$('*').removeAttr('style');
    	$('#source_table tbody tr td input.checkbox:not(:checked)').parent().css('border','red 1px dashed');
	});
	</script> -->
<script>
	$(document).ready(function(){
	 var $form = $('form');
	 $form.submit(function(){
			$.post($(this).attr('action'), $(this).serialize(), function(response){
			},'json');
			alert("Committee Created");
			return false;
	 });
});
</script>

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
				<a class="nav-link dropdown-toggle" class="active" data-toggle="dropdown" href="../../Committee/create_committee/create_page.php">Committee<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="active"><a href="../../Committee/create_committee/create_page.php">Create Committee</a></li>
					<li><a href="../../Committee/display_committee/display_page.php">Display Committee</a></li>
					<li><a href="../../Committee/abolish_committee/abolish_page.php">Abolish Committee</a></li>
					<li><a href="../../Committee/modify_committee/modify_page.php">Modify Committee</a></li>
					<li><a href="../../Committee/download_committee/download_page.php">Committee Form</a></li>
				</ul>
			</li><br><br>
			<div class="row" align="center"><input type="button" value="Logout" onclick="document.location.href='../../Login/logout.php'"></div>
		</ul>
	</div>

	<div class="col-md-10">

		<div class="page-header"><h2>Create Committee</h2></div>

		<form action = "create_committee.php" method = "post" class ="form-horizontal">
			<?php include '../committee_fields.php';?>
			<br><br>
			<div class="row">
				<input type="submit" value="Submit" >
			</div>
		</form>
	</div>
</div>

</body>
</html>
