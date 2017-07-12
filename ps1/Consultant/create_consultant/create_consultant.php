<?php 

include '../connect.php';

$coord_id = $_SESSION['coord_id'];

include '../post_cnslt_fields.php';

$sql = "insert into cnslt_bnk (f_name, l_name, mid_name, coord_id, title, dp_name,
add_line_1, add_line_2, city, pincode, state, country,
mob_no, email_1, email_2, pan_no, aadhaar_no,
cnslt_type, assgn, pay_stat, cnslt_stat,
category, degree, discipline,
ifsc_code, branch_name, acc_no, bank_name,
retired_bool, prof_eng, prof_eng_det,
eng_comp, add_comp, desg_comp, grade_comp, nature_comp,
add_info, f_sp1, f_sp2, f_sp3, f_sp4, f_sp5,
dob, basic_sal, gross_sal)

values( '$f_name', '$l_name', '$mid_name', '$coord_id', '$title', '$dp_name',
'$add_line_1', '$add_line_2', '$city', '$pincode', '$state', '$country',
'$mob_no', '$email_1', '$email_2', '$pan_no', '$aadhaar_no',
'$cnslt_type', '$pr_assgn', '$pay_stat', '$cnslt_stat',
'$category', '$degree','$discipline',
'$ifsc_code','$branch_name','$acc_no','$bank_name',
'$retired_bool','$prof_eng','$prof_eng_det',
'$eng_comp','$add_comp','$desg_comp','$grade_comp','$nature_comp',
'$add_info','$f_sp1','$f_sp2','$f_sp3','$f_sp4','$f_sp5',
'$dob',$basic_sal,$gross_sal
)";

if(!mysqli_query($conn, $sql))
	echo "error";

$stmt = $conn->prepare("INSERT INTO prof_q (cnslt_id, qlf, exp) VALUES (?, ?, ?)");
$stmt->bind_param("dss", $cnslt_id, $q, $e);

$cnslt_id = mysqli_insert_id($conn);

for ($i = 0; $i < count($qlf); $i++)
{
	$q = mysqli_real_escape_string($conn,trim($qlf[$i]));
	$e = mysqli_real_escape_string($conn,trim($exp[$i]));

	if (!$stmt->execute())
		echo "failed";
}

$stmt2 = $conn->prepare("INSERT INTO sp_assgn (cnslt_id, assgn, assgn_dur) VALUES (?, ?, ?)");
$stmt2->bind_param("dss", $cnslt_id, $a, $d);

for ($i = 0; $i < count($assgn); $i++)
{
	$a = mysqli_real_escape_string($conn,trim($assgn[$i]));
	$d = mysqli_real_escape_string($conn,trim($dur[$i]));

	if (!$stmt2->execute())
		echo "failed";
}

$stmt3 = $conn->prepare("INSERT INTO f_exp (cnslt_id, field, f_dur) VALUES (?, ?, ?)");
$stmt3->bind_param("dss", $cnslt_id, $f, $d);

for ($i = 0; $i < count($field); $i++)
{
	$f = mysqli_real_escape_string($conn,trim($field[$i]));
	$d = mysqli_real_escape_string($conn,trim($f_dur[$i]));

	if (!$stmt3->execute())
		echo "failed";
}
?>