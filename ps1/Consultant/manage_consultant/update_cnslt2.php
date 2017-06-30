<?php include '../connect.php';

include '../post_cnslt_fields.php';

$cnslt_id = $_POST['cnslt_id_4'];
$coord_id = $_POST['coord_id'];

$sql = "update cnslt_bnk set f_name = '$f_name', l_name = '$l_name', mid_name = '$mid_name', coord_id = $coord_id, title = '$title', dp_name = '$dp_name',
add_line_1 = '$add_line_1', add_line_2 = '$add_line_2', city = '$city', pincode = '$pincode', state = '$state', country = '$country',
mob_no = '$mob_no', email_1 = '$email_1', email_2 = '$email_2', pan_no = '$pan_no', aadhaar_no = '$aadhaar_no',
cnslt_type = '$cnslt_type', assgn = '$pr_assgn', pay_stat = '$pay_stat', cnslt_stat = '$cnslt_stat',
category = '$category', degree = '$degree', discipline = '$discipline',
ifsc_code = '$ifsc_code', branch_name = '$branch_name', acc_no = '$acc_no', bank_name = '$bank_name',
retired_bool = '$retired_bool', prof_eng = '$prof_eng', prof_eng_det = '$prof_eng_det',
eng_comp = '$eng_comp', add_comp = '$add_comp', desg_comp = '$desg_comp', grade_comp = '$grade_comp', nature_comp = '$nature_comp',
add_info = '$add_info', f_sp1 = '$f_sp1', f_sp2 = '$f_sp2', f_sp3 = '$f_sp3', f_sp4 = '$f_sp4', f_sp5 = '$f_sp5',
dob = '$dob', basic_sal = $basic_sal, gross_sal = $gross_sal where cnslt_id = $cnslt_id";


if(!mysqli_query($conn, $sql))
	echo "error";

// $stmt = $conn->prepare("UPDATE prof_q SET cnslt_id= ?, qlf = ?, exp = ?");
// $stmt->bind_param("dss", $cnslt_id, $q, $e);

// for ($i = 0; $i < count($qlf); $i++)
// {
// 	$q = mysql_real_escape_string(trim($qlf[$i]));
// 	$e = mysql_real_escape_string(trim($exp[$i]));

// 	if (!$stmt->execute())
// 		echo "failed";
// }

// $stmt2 = $conn->prepare("UPDATE sp_assgn SET cnslt_id = ?, assgn = ?, assgn_dur = ?)");
// $stmt2->bind_param("dss", $cnslt_id, $a, $d);

// for ($i = 0; $i < count($assgn); $i++)
// {
// 	$a = mysql_real_escape_string(trim($assgn[$i]));
// 	$d = mysql_real_escape_string(trim($dur[$i]));

// 	if (!$stmt2->execute())
// 		echo "failed";
// }

// $stmt3 = $conn->prepare("UPDATE f_exp SET cnslt_id = ?, field = ?, f_dur = ?)");
// $stmt3->bind_param("dss", $cnslt_id, $f, $d);

// for ($i = 0; $i < count($field); $i++)
// {
// 	$f = mysql_real_escape_string(trim($field[$i]));
// 	$d = mysql_real_escape_string(trim($f_dur[$i]));

// 	if (!$stmt3->execute())
// 		echo "failed";
// }

?>