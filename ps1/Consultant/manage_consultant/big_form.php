<?php include '../connect.php';

$q = $_GET['q'];

$sql = "select f_name, l_name, mid_name, coord_id, title, dp_name,
add_line_1, add_line_2, city, pincode, state, country,
mob_no, email_1, email_2, pan_no, aadhaar_no,
cnslt_type, assgn, pay_stat, cnslt_stat,
category, degree, discipline,
ifsc_code, branch_name, acc_no, bank_name,
retired_bool, prof_eng, prof_eng_det,
eng_comp, add_comp, desg_comp, grade_comp, nature_comp,
add_info, f_sp1, f_sp2, f_sp3, f_sp4, f_sp5,
dob, basic_sal, gross_sal from cnslt_bnk where cnslt_id = $q";

if ($result = mysqli_query($conn,$sql))
{
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
	}
}
?>