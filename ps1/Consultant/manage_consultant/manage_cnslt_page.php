<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>Manage Consultant</title>
<head lang = "en">
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel = "stylesheet" href = "manage_consultant.css">
  	<script src = manage_consultant.js></script>
  	<script src="http://code.jquery.com/jquery-1.5.js"></script>
  	<script> 
  	$(document).ready(function(){
	   var $form = $('form');
	   $form.submit(function(){
	      $.post($(this).attr('action'), $(this).serialize(), function(response){
	         
	      },'json');
	      alert("Consultant Updated");
	      return false;
	   });
	});
	</script>

</head>
<body>

<div class = "container-fluid">
	<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked" data-spy="affix">
				<li class="dropdown">
					<a class="nav-link dropdown-toggle" class="active" data-toggle="dropdown" href="../create_consultant/form_consultant.php">Consultant<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="../create_consultant/form_consultant.php">Create Consultant</a></li>
						<li><a class="dropdown-item" href="../display_consultant/display_consultant.html">Display Consultant</a></li>
						<li class="active"><a class="dropdown-item" href="../manage_consultant/manage_cnslt_page.php">Manage Consultant</a></li>
						<li><a class="dropdown-item" href="../form_consultant/form_consultant.html">Form 1A</a></li>
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
				<h2>Manage Consultant</h2>
				<form action = "update_cnslt.php" method = "post" id = "consultant_form_manage">
			</div>
			<div class="row">
				<h4>Enter Consultant No</h4>
			</div>
			<div class="row">
				<div class="col-md-5">Consultant No: <input type = "number" name = "cnslt_id" id = "cnslt_id">
				<input type = "button" value = "Get Data" onclick="cnslt_details(<?php echo $_SESSION['coord_id'];?>)"></div>
			</div>

			<div class="row">
				<br><h4>Manage Details</h4>
			</div>
			
			<div class="row">
				<div class="col-md-2">Co-ordinator: </div>
				<div class="col-md-3"><input type = "number" name = "coord_id" id="coord"></div>
			</div>
			<div class="row">
				<div class="col-md-2">Consultant Type: </div>
				<div class="col-md-3"><select name = "cnslt_type" id="con_type">
								<option value = ""></option>
								<option value = "SP">Specialist</option>
								<option value = "EX">Expert</option>
								<option value = "CN">Consultant</option>
							</select></div>
			</div>
			<div class="row">
				<div class="col-md-2">Consultant Status: </div>
				<div class="col-md-3"><select name = "cnslt_status" id="con_stat">
									<option value = "">Undefined</option>
									<option value = "A">Active</option>
									<option value = "I">Inactive</option>
								</select></div>
			</div>
			<div class="row">
				<div class="col-md-2">Payment Status:</div>
				<div class="col-md-3" ><input type="text" id="payment" value="Undefined" readonly></div>
			</div>
		<br>
		<input type = "submit" value="Update" id="submit">
		</form>
		</div>
	</div>
</div>

</body>
</html>