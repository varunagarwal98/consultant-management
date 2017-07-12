<div class="row"><h4><b>Type of Creation</b></h4></div>

<div class="row">
	<div class="radio-inline">
		<input type = "radio" name = "create_type" value = "New Committee" checked="checked" onclick="header_data(1)">
		New Committee
	</div>
	<div class="radio-inline">
		<input type = "radio" name = "create_type" value = "Reconstitution" onclick = "header_data(2)">
		Reconstitution
	</div>
	<div class="radio-inline">
		<input type = "radio" name = "create_type" value = "Sub-committee" onclick = "header_data(3)">
		Sub-committee
	</div>
</div>

<br><br>

<div class="row"> <h4><b>Header Data</b></h4> </div>
<br>
<div id="1" class="toshow" style="display:none">
	<div class="form-group">
		<label class="control-label col-md-3" for="create_committee">Ref. Comm. ID: <font color="red">*</font> </label>
		<div class="col-md-5">
			<input type = "number" class="form-control" name="ref_com_id"><br>
			<input type="button" value="Get Committee Details" onclick = "get_com_details()">
		</div>
 	</div>

 	<div class="form-group">
		<label class="control-label col-md-3" for="create_committee">Reconstitution Type: <font color="red">*</font></label>

		<div class="col-md-5">

			<select class="form-control" name = "reconst_type">
				<option value = ""></option>
				<option value = "Partial">Partial Reconstitution</option>
				<option value = "Complete">Complete Reconstitution</option>
			</select><br>

	 	</div>
 	</div>
</div>

<div id="2" class="toshow" style="display:none">
	<div class="form-group">
		<label class="control-label col-md-3" for="create_committee">Parent Comm. ID: <font color="red">*</font></label>

	 	<div class="col-md-5">
			<input type="number" class="form-control" name = "ref_com_id" id="ref_com_id" placeholder="ID of the parent committee" >
		</div>
		</div>
</div>

<div id ="3">
	<div class="form-group">
		<label class="control-label col-md-3" for="create_committee" >Committee Type: <font color="red">*</font></label>

		<div class="col-md-5">
		 	<select class="form-control" name = "com_type" placeholder= "eg.Regular Committee" required>
				<option value = "Standing">Standing Committee</option>
				<option value = "Regular">Regular Committee</option>
			</select><br>
		</div>
	</div>

	<div class="form-group">
 	 	<label class="control-label col-md-3" for="create_committee">Committee Category: <font color="red">*</font></label>

 		<div class="col-md-5">

			<select class="form-control" name = "com_cat" placeholder= "eg.ADVISORY COMMITTEE" required>
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
				<option value = "others"></option>
			</select><br>

 		</div>
 	</div>

 	<div class="form-group">

		<label class="control-label col-md-3" for="create_committee">Committee Name:</label>

		<div class="col-md-5">
			<input type="text" class="form-control" name = "com_name" id="comm_name" placeholder="Name of the committee">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3" for="create_committee">Committee Abbreviation:  <font color="red">*</font></label>

		<div class="col-md-5">
			<input type="text" class="form-control" name = "com_abr" id="comm_abb" placeholder="Unique abbreviation of the committee" required>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3" for="create_committee">Const /Recons. Order No:</label>

		<div class="col-md-5">
			<input type="text" class="form-control" name = "order_no" id="com_ord_no" placeholder="Const/recons order no">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3" for="create_committee">Order Date:</label>

		<div class="col-md-5">
			<input type="date" class="form-control" name = "order_date" id="com_order_date" placeholder="Date of the order">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3" for="create_committee">Valid From:  <font color="red">*</font></label>

		<div class="col-md-5">
			<input type="date" class="form-control" name = "valid_from" id="valid_from" placeholder="Valid from" required>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3" for="create_committee">Valid To:  <font color="red">*</font></label>

		<div class="col-md-5">
			<input type="date" class="form-control" name = "valid_to" id="valid_to" placeholder="Valid to" required>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3" for="create_committee">Committee SPOC: <font color="red">*</font></label>

		<div class="col-md-5">
			<input type="text" class="form-control" name = "com_spoc" id="com_spoc"  value= "<?php echo $_SESSION['coord_id'];?>" readonly required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3" for="create_committee">Approving Authority:</label>

		<div class="col-md-5">
			<input type="text" class="form-control" name = "app_auth" id="app_com" placeholder="Approving Authority">

		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3" for="">Committee Status:</label>
		<div class="col-md-5">
			<select class="form-control" name = "com_stat" disabled>
					<option value = "New">New</option>
					<option value = "Active">Active</option>
					<option value = "Inactive">Inactive</option>
			</select><br>
			<input type="text" name = "com_stat" value="New" hidden>
		</div>
 	</div>

 	<div class="form-group">
		<label class="control-label col-md-3" for="">Processing Status:</label>
		<div class="col-md-5">
			<select class="form-control" name = "proc_stat" disabled>
					<option value = "New">New</option>
					<option value = "Saved as Draft">Saved As Draft</option>
					<option value = "Proposed">Propsed</option>
					<option value = "Rejected by HOD">Rejected by HOD</option>
					<option value = "Registered by Admin">Registered</option>
					<option value = "Processed by Admin">Processed by Admin</option>
					<option value = "Abolished">Abolished</option>
					<option value = "Propose to be Abolished">Propose to Abolished</option>
				</select><br>
				<input type="text" name = "proc_stat" value="New" hidden>
		</div>
 	</div>

 	<div class="form-group">
		<label class="control-label col-md-3" for="">Sub-Committee:</label>
		<div class="col-md-5">
		</div>
 	</div>

</div>
<br><br>
<h4><b>Committee Details</b></h4>
<br>
<div class="radio-inline">
	<input type = "radio" name="com_details" value="sel_com" onclick = "details_data(1)" checked>
	Selection of Committee<br>
</div>
<div class="radio-inline">
	<input type = "radio" name="back_data" value="back_data" onclick = "details_data(2)">
	Background Data<br>
</div>
<div class="radio-inline">
	<input type = "radio" name="terms_ref" value="terms_ref" onclick = "details_data(3)">
	Terms of Reference<br>
</div>
<div class="radio-inline">
	<input type = "radio" name="dis_list" value="dis_list" onclick = "details_data(4)">
	Distribution List<br>
</div>

<div id="selectionOfMembers">

	<br>
	<div class="form-group">
		<label class="control-label col-md-3" for="">Search by ID:</label>
 		<div class="col-md-5">
		 	<input type="number" class="form-control" name = "cnslt_id" id="cnslt_id" placeholder="enter the ID">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3" for="">Search by First Name:</label>
		<div class="col-md-5">
			<input type="text" class="form-control" name = "f_name" id = "f_name" placeholder="enter the name">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3" for="">Search by Last Name:</label>
		<div class="col-md-5">
			<input type="text" class="form-control" name = "l_name" id ="l_name" placeholder="enter the name">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3" for="">Search by Specialisation:</label>
		<div class="col-md-5">
			<select class="form-control" name = "f_sp" id="f_sp" placeholder= "eg. Spec 1" >
				<option value=""></option>
				<?php include'../../Consultant/fields_spc.php';?>
			</select><br>

		</div>
	</div>
	<div class="row">
		<input type="button" value="Search" onclick="get_cnslt_table()">
	</div>
	<br><br>
	<div class="row">
		<div class="col-md-5">
			<table id="source_table" width="100%">
				<tr>
					<th width="30%">Cnslt ID</th>
					<th width="60%">Cnslt Name</th>
					<th width="10%"></th>
				</tr>
			</table>
		</div>
		<div class="col-md-1">
			<br><br>
		</div>
		<div class="col-md-5">
			<table id="dest_table" width="100%">
				<tr>
					<th width="10%"></th>
					<th width = "20%">Id</th>
					<th width="40%">Cnslt Name</th>
					<th width="30%">Role</th>
				</tr>
			</table>
		</div>
	</div>
</div>

<div id ="backgroundData" hidden>
	<div class="row">
		<div class="form-group"><br>
			<label for="comment">Background Data</label><br>
		</div>
		<div class="col-md-8">
			<textarea name="back_data" class="form-control" rows="20" cols="50"></textarea>
		</div>
	</div>
</div>

<div id ="termsOfReference" hidden>
	<div class="row">
		<div class="form-group">
		  	<label for="comment"><br>Terms of reference</label>
		</div>
		<div class="col-md-8">
		  	<textarea name="terms_ref" class="form-control" rows="20" cols="50"></textarea>
		</div>
	</div>
</div>

<div id="DistributionList" hidden>
	<div class="form-group">
	  	<label for="comment"><br>Distribution List</label>
	</div>
</div>
