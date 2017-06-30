<?php include '../connect.php';

$cnslt_id = $_SESSION['cnslt_id'];

$query = "select file_name from cnslt_bnk where cnslt_id = $cnslt_id";

if ($result = mysqli_query($conn, $query))
	if(mysqli_num_rows($result) > 0)
	{
		$query = "SELECT file_name, file_type, file_size, form_1a FROM cnslt_bnk WHERE cnslt_id = $cnslt_id";

		$result = mysqli_query($conn, $query) or die('Error, query failed');
		list($name, $type, $size, $content) = mysqli_fetch_array($result);

		header("Content-length: $size");
		header("Content-type: $type");
		header("Content-Disposition: attachment; filename=$name");
		echo $content;
		exit;
	}

require_once __DIR__ . '../../../mPDF/vendor/autoload.php';

$sql = "select * from cnslt_bnk where cnslt_id = $cnslt_id";

$f_name;

if($result = mysqli_query($conn, $sql))
{
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		//$f_name = $row['f_name'];
	}
}

$mpdf = new mPDF();

$html = '
<div class = "container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div class = "row">
				<h3>Personal Details</h3>
			</div>
			<div class = "row">
				<br>
				<div class = "col-xs-5">
					<div class = "row">
						<h4>Name</h4>
					</div>
					<div class = "row">
						<div class="col-xs-4">Title: </div>
						<div class="col-xs-4">'.$row['title'].'</div>
					</div>
					<div class="row">
						<div class="col-xs-4">First Name: </div>
						<div class="col-xs-4">'.$row['f_name'].'</div>
					</div>
					<div class="row">
						<div class="col-xs-4">Middle Name: </div>
						<div class="col-xs-4">'.$row['mid_name'].'</div>
					</div>
					<div class="row">
						<div class="col-xs-4">Last Name: </div>
						<div class="col-xs-4">'.$row['l_name'].'</div>
					</div>
					<div class="row">
						<div class="col-xs-4">Display Name: </div>
						<div class="col-xs-4">'.$row['dp_name'].'</div>
					</div>
				</div>
				<div class = "col-xs-6">
					<div class = "row">
						<h4>Assignment Details</h4>
					</div>
					<div class="row">
						<div class="col-xs-4">Consultant Type: </div>
						<div class="col-xs-4">'.$row['cnslt_type'].'</div>
					</div>
					<div class="row">
						<div class="col-xs-4">Proposed Assignment:</div>
						<div class="col-xs-4">'.$row['assgn'].'</div>
					</div>
					<div class="row">
						<div class="col-xs-4">Co-ordinator: </div>
						<div class="col-xs-4">'.$row['coord_id'].'</div>
					</div>
					<div class="row">
						<div class="col-xs-4">Payment Status: </div>
						<div class="col-xs-4">'.$row['pay_stat'].'</div>
					</div>
					<div class="row">
						<div class="col-xs-4">Consultant Status: </div>
						<div class="col-xs-4">'.$row['cnslt_stat'].'</div>
					</div>
				</div>
			</div>

			<div class = "row">
				<div class="row"><br></div>
				<div class = "col-xs-5">
					<div class = "row">
						<h4>Address</h4>
					</div>
					<div class = "row">
						<div class="col-xs-4">Address Line1: </div>
						<div class="col-xs-4">'.$row['add_line_1'].'</div>
					</div>
					<div class = "row">
						<div class="col-xs-4">Address Line2: </div>
						<div class="col-xs-4">'.$row['add_line_2'].'</div>
					</div>
					<div class = "row">
						<div class="col-xs-4">City: </div>
						<div class="col-xs-4">'.$row['city'].'</div>
					</div>
					<div class = "row">
						<div class="col-xs-4">Pincode: </div>
						<div class="col-xs-4">'.$row['pincode'].'</div>
					</div>
					<div class = "row">
						<div class="col-xs-4">State:</div>
						<div class="col-xs-4">'.$row['state'].'</div>
					</div>
					<div class = "row">
						<div class="col-xs-4">Country: </div>
						<div class="col-xs-4">'.$row['country'].'</div>
					</div>
				</div>
				<div class = "col-xs-5">
					<div class = "row">
						<h4>Contact /Other Details</h4>
					</div>
					<div class = "row">
						<div class="col-xs-6">Mobile No: </div>
						<div class="col-xs-4">'.$row['mob_no'].'</div>
					</div>
					<div class = "row">
						<div class="col-xs-6">Primary Email ID: </div>
						<div class="col-xs-4">'.$row['email_1'].'</div>
					</div>
					<div class = "row">
						<div class="col-xs-6">Sec. Email ID: </div>
						<div class="col-xs-4">'.$row['email_2'].'</div>
					</div>
					<div class="row">
						<div class="col-xs-6">PAN No: </div>
						<div class="col-xs-4">'.$row['pan_no'].'</div>
					</div>
					<div class="row">
						<div class="col-xs-6">Aadhaar No: </div>
						<div class="col-xs-4">'.$row['aadhaar_no'].'</div>
					</div>
					<div class = "row">
						<div class="col-xs-6">Date of Birth: </div>
						<div class="col-xs-4">'.$row['dob'].'</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="row"><br></div>
				<div class="col-xs-5">
					<div class="row">
						<h4>Education Details</h4>
					</div>
					<div class="row">
						<div class="col-xs-4">Category: </div>
						<div class="col-xs-4">'.$row['category'].'</div>
					</div>

					<div class="row">
						<div class="col-xs-4">Degree: </div>
						<div class="col-xs-4">'.$row['degree'].'</div>
					</div>

					<div class="row">
						<div class="col-xs-4">Discipline: </div>
						<div class="col-xs-4">'.$row['discipline'].'</div>
					</div>
				</div>
				<div class="col-xs-5">
					<div class="row">
						<h4>Bank Details</h4>
					</div>
					<div class="row">
						<div class="col-xs-6">IFSC Code: </div>
						<div class="col-xs-4">'.$row['ifsc_code'].'</div>
					</div>
					<div class="row">
						<div class="col-xs-6">Bank Branch Name: </div>
						<div class="col-xs-4">'.$row['branch_name'].'</div>
					</div>
					<div class="row">
						<div class="col-xs-6">Bank Account No: </div>
						<div class="col-xs-4">'.$row['acc_no'].'</div>
					</div>
					<div class="row">
						<div class="col-xs-6">Bank Name: </div>
						<div class="col-xs-4">'.$row['bank_name'].'</div>
					</div>
				</div>
			</div>
			<div class="row">
				<h3>Experience and Specialisation Details</h3>
			</div>
			<div class="row">
				<div class="col-xs-5">
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
								<td>  </td>
								<td>  </td>
							</tr>
						</table>
					</div>
					
				</div>
				<div class="col-xs-1"></div>
				<div class="col-xs-5">
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
								<td>  </td>
								<td>  </td>
							</tr>
						</table>
					</div>
					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-5">
					<div class="row">
						<h4>Special Assignments - Carried out for National/International Org.</h4></div>
					<div class="row">
						<table id = "assg">
							<tr>
								<th>Assignments</th>
								<th>Duration</th>
							</tr>
							<tr>
								<td>  </td>
								<td>  </td>
							</tr>
						</table>
					</div>
					
				</div>
				<div class="col-xs-1"></div>
				<div class="col-xs-5"> 
					<div class="row"><h4>Field(s) of Specialisation</h4></div>

					<div class="row">
						Fields of Spcl - 1: '.$row['f_sp1'].'<br>
						Fields of Spcl - 2: '.$row['f_sp2'].'<br>
						Fields of Spcl - 3: '.$row['f_sp3'].'<br>
						Fields of Spcl - 4: '.$row['f_sp4'].'<br>
						Fields of Spcl - 5: '.$row['f_sp5'].'
					</div>
				</div>
			</div>

			<div class="row"><br></div>
			<div class="row">
				<h3>Present Engagement Details</h3><br>
			</div>
			<div class="row">
				<div class="col-xs-4" id="col1">If Retired?: </div>
				<div class="col-xs-7" id="col2">'.$row['retired_bool'].'</div>
			</div>
			<div class="row">
				<div class="col-xs-4" id="col1">Present Professional Engagement: </div>
				<div class="col-xs-7" id="col2">'.$row['prof_eng'].'</div>
			</div>
			<div class="row">
				<div class="col-xs-4" id="col1">If other, Specify: </div>
				<div class="col-xs-7" id="col2">'.$row['prof_eng_det'].'</div>
			</div>
			<div class="row">
				<div class="col-xs-4" id="col1">Name of the Engaging Company/Institution: </div>
				<div class="col-xs-7" id="col2">'.$row['eng_comp'].'</div>
			</div>
			<div class="row">
				<div class="col-xs-4" id="col1">Address of the Engaging Company/Institution: </div>
				<div class="col-xs-7" id="col2">'.$row['add_comp'].'</div>
			</div>
			<div class="row">
				<div class="col-xs-4" id="col1">Designation of the Engaging Company/Institution: </div>
				<div class="col-xs-7" id="col2">'.$row['desg_comp'].'</div>
			</div>
			<div class="row">
				<div class="col-xs-4" id="col1">Grade in the Company/Institution: </div>
				<div class="col-xs-7" id="col2">'.$row['grade_comp'].'</div>
			</div>
			<div class="row">
				<div class="col-xs-4" id="col1">Nature of Work: </div>
				<div class="col-xs-7" id="col2">'.$row['nature_comp'].'</div>
			</div>
			<div class="row">
				<div class="col-xs-4" id="col1">Basic Salary: </div>
				<div class="col-xs-7" id="col2">'.$row['basic_sal'].'</div>
			</div>
			<div class="row">
				<div class="col-xs-4" id="col1">Gross Salary: </div>
				<div class="col-xs-7" id="col2">'.$row['gross_sal'].'</div>
			</div>
			<div class="row"><br></div>
			<div class="row">
				<h3>Additional Info</h3>
			</div>
			<div class="row">'.$row['add_info'].'</div>
		</div>
	</div>
</div>
';

$mpdf->WriteHTML(file_get_contents("../../bootstrap/css/bootstrap.min.css"), 1);
$mpdf->WriteHTML($html, 2);

$mpdf->Output();
?>