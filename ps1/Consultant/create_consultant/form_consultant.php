<?php session_start(); ?>
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

<form action = "create_consultant.php" method = "post" id = "consultant_form_creation">

<div class = "container-fluid">
	<div class="row">
		<nav class="col-md-2">
			<ul class="nav nav-pills nav-stacked" data-spy="affix">
				<li class="dropdown">
					<a class="nav-link dropdown-toggle" class="active" data-toggle="dropdown" href="../create_consultant/form_consultant.php">Consultant<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="active"><a class="dropdown-item" href="../create_consultant/form_consultant.php">Create Consultant</a></li>
						<li><a class="dropdown-item" href="../display_consultant/display_consultant.html">Display Consultant</a></li>
						<li><a class="dropdown-item" href="../manage_consultant/manage_cnslt_page.php">Manage Consultant</a></li>
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
		</nav>
		<div class="col-md-9">
				<div class = "page-header">
					<h2>Create Consultant</h2>
				</div>
				<div class = "row">
					<h3>Personal Details</h3>
				</div>
				<div class = "row">
					<div class="row"><br></div>
					<div class = "col-md-5">
						<div class = "row">
							<h4>Name</h4>
						</div>
						<div class = "row">
							<div class="col-md-4">Title: *</div>
							<div class="col-md-4">
									<select name = "title" required>
										<option value =""></option>
										<option value = "Dr.">Dr.</option>
										<option value = "M/s">M/s</option>
										<option value = "Miss.">Miss.</option>
										<option value = "Mr.">Mr.</option>
										<option value = "Mr._and_Mrs.">Mr. and Mrs.</option>
										<option value = "Mrs.">Mrs.</option>
										<option value = "Ms.">Ms.</option>
										<option value = "Prof.">Prof.</option>
										<option value = "Shri">Shri</option>
										<option value = "Smt.">Smt.</option>
									</select><br>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">First Name: *</div>
							<div class="col-md-4"><input type = "text" name = "f_name" required></div>
						</div>
						<div class="row">
							<div class="col-md-4">Middle Name: </div>
							<div class="col-md-4"><input type = "text" name = "mid_name"></div>
						</div>
						<div class="row">
							<div class="col-md-4">Last Name: </div>
							<div class="col-md-4"><input type = "text" name = "l_name"></div>
						</div>
						<div class="row">
							<div class="col-md-4">Display Name: </div>
							<div class="col-md-4"><input type = "text" name = "dp_name"></div>
						</div>
					</div>
					<div class = "col-md-5">
						<div class = "row">
							<h4>Assignment Details</h4>
						</div>
						<div class="row">
							<div class="col-md-6">Consultant Type: </div>
							<div class="col-md-4"> <input type="text" value="Expert" readonly>
							<input type="text" name="cnslt_type" value="EX" hidden></div>
						</div>
						<div class="row">
							<div class="col-md-6">Proposed Assignment:</div>
							<div class="col-md-4"> <input type = "text" name = "pr_assgn"> </div>
						</div>
						<div class="row">
							<div class="col-md-6">Co-ordinator: </div>
							<div class="col-md-4"> <input type = "number" name = "coord_id" value= "<?php echo $_SESSION['coord_id'];?>" readonly> </div>
						</div>
						<div class="row">
							<div class="col-md-6">Payment Status: </div>
							<div class="col-md-4"><input type="text" name="pay_stat" value="No Pay" readonly> </div>
						</div>
						<div class="row">
							<div class="col-md-6">Consultant Status: </div>
							<div class="col-md-4"><input type="text" name="cnslt_stat" value="New" readonly> </div>
						</div>
					</div>
				</div>

				<div class = "row">
					<div class="row"><br></div>
					<div class = "col-md-5">
						<div class = "row">
							<h4>Address</h4>
						</div>
						<div class = "row">
							<div class="col-md-4">Address Line1: </div>
							<div class="col-md-4"><input type = "text" name = "add_line_1"></div>
						</div>
						<div class = "row">
							<div class="col-md-4">Address Line2: </div>
							<div class="col-md-4"><input type = "text" name = "add_line_2"></div>
						</div>
						<div class = "row">
							<div class="col-md-4">City: </div>
							<div class="col-md-4"><input type = "text" name = "city"></div>
						</div>
						<div class = "row">
							<div class="col-md-4">Pincode: </div>
							<div class="col-md-4"><input type = "text" name = "pincode"></div>
						</div>
						<div class = "row">
							<div class="col-md-4">State:</div>
							<div class="col-md-4"><select name = "state"> 
										<option value = "andhra pradesh">Andhra Pradesh</option>
										<option value = "arunachal pradesh">Arunachal Pradesh</option>
										<option value = "assam">Assam</option>
										<option value = "bihar">Bihar</option>
										<option value = "goa">Goa</option>
										<option value = "gujarat">Gujarat</option>
										<option value = "haryana">Haryana</option>
										<option value = "himachal pradesh">Himachal Pradesh</option>
										<option value = "jammu and kashmir">Jammu And Kashmir</option>
										<option value = "karnataka">Karnataka</option>
										<option value = "kerala">Kerala</option>
										<option value = "madhya pradesh">Madhya Pradesh</option>
										<option value = "maharashtra">Maharashtra</option>
										<option value = "manipur">Manipur</option>
										<option value = "meghalaya">Meghalaya</option>
										<option value = "mizoram">Mizoram</option>
										<option value = "nagaland">Nagaland</option>
										<option value = "orissa">Orissa</option>
										<option value = "punjab">Punjab</option>
										<option value = "rajasthan">Rajasthan</option>
										<option value = "sikkim">Sikkim</option>
										<option value = "tamil nadu">Tamil Nadu</option>
										<option value = "tripura">Tripura</option>
										<option value = "uttar pradesh">Uttar Pradesh</option>
										<option value = "west bengal">West Bengal</option>
										<option value = "andaman and nico.in.">Andaman And Nico.In.</option>
										<option value = "chandigarh">Chandigarh</option>
										<option value = "dadra and nagar hav.">Dadra And Nagar Hav.</option>
										<option value = "daman and diu">Daman And Diu</option>
										<option value = "delhi">Delhi</option>
										<option value = "lakshadweep">Lakshadweep</option>
										<option value = "pondicherry">Pondicherry</option>
										<option value = "chhattisgarh">Chhattisgarh</option>
										<option value = "jharkhand">Jharkhand</option>
										<option value = "uttaranchal">Uttaranchal</option>
									</select></div>
						</div>
						<div class = "row">
							<div class="col-md-4">Country: </div>
							<div class="col-md-4"><input type="text" name="country" value="IN"></div>
						</div>
					</div>
					<div class = "col-md-5">
						<div class = "row">
							<h4>Contact /Other Details</h4>
						</div>
						<div class = "row">
							<div class="col-md-6">Mobile No: </div>
							<div class="col-md-4"><input type = "text" name = "mob_no"></div>
						</div>
						<div class = "row">
							<div class="col-md-6">Primary Email ID: *</div>
							<div class="col-md-4"><input type = "email" name = "email_1" required></div>
						</div>
						<div class = "row">
							<div class="col-md-6">Sec. Email ID: </div>
							<div class="col-md-4"><input type = "email" name = "email_2" ></div>
						</div>
						<div class="row">
							<div class="col-md-6">PAN No: </div>
							<div class="col-md-4"><input type = "text" name = "pan_no" ></div>
						</div>
						<div class="row">
							<div class="col-md-6">Aadhaar No: </div>
							<div class="col-md-4"><input type = "text" name = "aadhaar_no" ></div>
						</div>
						<div class = "row">
							<div class="col-md-6">Date of Birth: </div>
							<div class="col-md-4"><input type = "date" name = "dob" ></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="row"><br></div>
					<div class="col-md-5">
						<div class="row">
							<h4>Education Details</h4>
						</div>
						<div class="row">
							<div class="col-md-4">Category: </div>
							<div class="col-md-4"><select name = "category">
											<option value = ""></option>
											<option value = "High_School">School</option>
											<option value = "Higer_Sec_School">Higer Sec. School</option>
											<option value = "ITI">ITI</option>
											<option value = "NTC">NTC</option>
											<option value = "Graduation">Graduation</option>
											<option value = "Post_Graduation">Post Graduation</option>
											<option value = "Post_Grad_Diploma">Post Grad. Diploma</option>
											<option value = "PhD">PhD</option>
											<option value = "Undergrad/Diploma">Undergrad/Diploma</option>
											<option value = "Professional_Coursed">Professional Courses</option>
											<option value = "Fellowships">Fellowships</option>
										</select> </div>
						</div>

						<div class="row">
							<div class="col-md-4">Degree: </div>
							<div class="col-md-4"><select name = "degree">
										<option value = ""></option>
										<option value = "4th_Std">4th Std.</option>
										<option value = "A.M.I.E.">A.M.I.E.</option>
										<option value = "A.M.I.E.T.E.">A.M.I.E.T.E.</option>
										<option value = "Advanced_Diploma">Advanced_Diploma</option>
										<option value = "B.A.">B.A.</option>
										<option value = "B.C.A.">B.C.A.</option>
										<option value = "B.Com">B.Com</option>
										<option value = "B.E.">B.E.</option>
										<option value = "B.Ed">B.Ed</option>
										<option value = "B.L.I.Sc.">B.L.I.Sc.</option>
										<option value = "B.Sc.">B.Sc.</option>
										<option value = "B.Sc._Ed">B.Sc. Ed</option>
										<option value = "B.Sc._Engineering">B.Sc. Engineering</option>
										<option value = "B.Tech">B.Tech</option>
										<option value = "Certificate">Certificate</option>
										<option value = "Diploma">Diploma</option>
										<option value = "Graduation">Graduation</option>
										<option value = "H.S.C.">H.S.C.</option>
										<option value = "ITI">ITI</option>
										<option value = "IX_Std">IX Std</option>
										<option value = "LLB">LLB</option>
										<option value = "License">License</option>
										<option value = "M.A.">M.A.</option>
										<option value = "M.Chem">M.Chem</option>
										<option value = "M.Com">M.Com</option>
										<option value = "M.E.">M.E.</option>
										<option value = "M.Phil">M.Phil</option>
										<option value = "M.S.">M.S.</option>
										<option value = "M.Sc">M.Sc</option>
										<option value = "M.Tech">M.Tech</option>
										<option value = "MBA">MBA</option>
										<option value = "National_Trade_Certificate">National Trade Certificate</option>
										<option value = "PG_Dip.">PG Dip.</option>
										<option value = "Ph.D">Ph.D</option>
										<option value = "Postdoc_Fellow">Postdoc Fellow</option>
										<option value = "S.Y.B.Com">S.Y.B.Com</option>
										<option value = "SSC">SSC</option>
										<option value = "SSLC">SSLC</option>
										<option value = "VIII_Std.">VIII Std.</option>
									</select> </div>
						</div>

						<div class="row">
							<div class="col-md-4">Discipline: </div>
							<div class="col-md-4"><input type="text" name="discipline"></div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="row">
							<h4>Bank Details</h4>
						</div>
						<div class="row">
							<div class="col-md-6">IFSC Code: </div>
							<div class="col-md-4"><input type = "text" name = "ifsc_code" ></div>
						</div>
						<div class="row">
							<div class="col-md-6">Bank Branch Name: </div>
							<div class="col-md-4"><input type = "text" name = "branch_name" ></div>
						</div>
						<div class="row">
							<div class="col-md-6">Bank Account No: </div>
							<div class="col-md-4"><input type = "text" name = "acc_no" ></div>
						</div>
						<div class="row">
							<div class="col-md-6">Bank Name: </div>
							<div class="col-md-4"><input type = "text" name = "bank_name" ></div>
						</div>
					</div>
				</div>
				<div class="row">
					<h3>Experience and Specialisation Details</h3>
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="row">
							<h4>Professinal Qualification</h4>
						</div>
						<div class="row">
							<table id = "prq">
								<tr>
									<th>Professional Qualification</th>
									<th>Experience</th>
								</tr>
								<tr>
									<td> <input type = "text" name = "qlf[0]" id = "cell"> </td>
									<td> <input type = "text" name = "exp[0]" id = "cell"> </td>
								</tr>
							</table>
						</div>
						<div class="row">
							<input type = "button" value = "Add" onclick = "add_row('prq', 'qlf', 'exp')">
							<input type = "button" value = "Delete" onclick = "del_row('prq')"><br><br>
						</div>	
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-5">
						<div class="row">
							<h4>Field(s) of Experience</h4>
						</div>
						<div class="row">
							<table id = "f">
								<tr>
									<th>Fields</th>
									<th>Duration</th>
								</tr>
								<tr>
									<td> <input type = "text" name = "field[0]" id = "cell"> </td>
									<td> <input type = "text" name = "f_dur[0]" id = "cell"> </td>
								</tr>
							</table>
						</div>
						<div class="row">
							<input type = "button" value = "Add" onclick = "add_row('f', 'field', 'f_dur')">
							<input type = "button" value = "Delete" onclick = "del_row('f')">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="row">
							<h4>Special Assignments - Carried out for National/International Org.</h4></div>
						<div class="row">
							<table id = "assg">
								<tr>
									<th>Assignments</th>
									<th>Duration</th>
								</tr>
								<tr>
									<td> <input type = "text" name = "assgn[0]" id = "cell"> </td>
									<td> <input type = "text" name = "dur[0]" id = "cell"> </td>
								</tr>
							</table>
						</div>
						<div class="row">
						<input type = "button" value = "Add" onclick = "add_row('assg', 'assgn', 'dur')">
						<input type = "button" value = "Delete" onclick = "del_row('assg')">
						</div>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-5"> 
						<div class="row"><h4>Field(s) of Specialisation</h4></div>

						<div class="row">
				
						Fields of Spcl - 1: <select name = "f_sp1"> 
											<option value = ""></option>
											</select><br>
						Fields of Spcl - 2: <select name = "f_sp2">
											<option value = ""></option>
											</select> <br>
						Fields of Spcl - 3: <select name = "f_sp3">
											<option value = ""></option>
											</select><br>
						Fields of Spcl - 4: <select name = "f_sp4">
											<option value = ""></option>
											</select><br>
						Fields of Spcl - 5: <select name = "f_sp5">
											<option value = ""></option>
											</select></div>
					</div>
				</div>

				<div class="row"><br></div>
				<div class="row">
					<h3>Present Engagement Details</h3><br>
				</div>
				<div class="row">
					<div class="col-md-4" id="col1">If Retired?: *</div>
					<div class="col-md-7" id="col2">
						<select name = "retired_bool">
							<option value = "no">No</option>
							<option value = "yes">Yes</option>
						</select></div>
				</div>
				<div class="row">
					<div class="col-md-4" id="col1">Present Professional Engagement: </div>
					<div class="col-md-7" id="col2"><input type = "text" name = "prof_eng"></div>
				</div>
				<div class="row">
					<div class="col-md-4" id="col1">If other, Specify: </div>
					<div class="col-md-7" id="col2"><input type = "text" name = "prof_eng_det"></div>
				</div>
				<div class="row">
					<div class="col-md-4" id="col1">Name of the Engaging Company/Institution: </div>
					<div class="col-md-7" id="col2"><input type = "text" name = "eng_comp" ></div>
				</div>
				<div class="row">
					<div class="col-md-4" id="col1">Address of the Engaging Company/Institution: </div>
					<div class="col-md-7" id="col2"><input type = "text" name = "add_comp" ></div>
				</div>
				<div class="row">
					<div class="col-md-4" id="col1">Designation of the Engaging Company/Institution: </div>
					<div class="col-md-7" id="col2"><input type = "text" name = "desg_comp" ></div>
				</div>
				<div class="row">
					<div class="col-md-4" id="col1">Grade in the Company/Institution: </div>
					<div class="col-md-7" id="col2"><input type = "text" name = "grade_comp" ></div>
				</div>
				<div class="row">
					<div class="col-md-4" id="col1">Nature of Work: </div>
					<div class="col-md-7" id="col2"><input type = "text" name = "nature_comp" ></div>
				</div>
				<div class="row">
					<div class="col-md-4" id="col1">Basic Salary: </div>
					<div class="col-md-7" id="col2"><input type = "number" name = "basic_sal" value = "0.0"></div>
				</div>
				<div class="row">
					<div class="col-md-4" id="col1">Gross Salary: </div>
					<div class="col-md-7" id="col2"><input type = "number" name = "gross_sal" value = "0.0"></div>
				</div>
				<div class="row"><br></div>
				<div class="row">
					<h3>Additional Info</h3>
				</div>
				<div class="row">
					<input type = "text" name = "add_info" id = "ai"> <br><br>
					<input type = "submit">
				</div>
		</div>
	</div>
</div>

</form>

</body>
</html>

