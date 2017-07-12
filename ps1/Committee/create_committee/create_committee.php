<?php
include '../../Consultant/connect.php';
//$coord_id = $_SESSION['coord_id'];
include '../post_committee_fields.php';

$sql = "INSERT INTO com_bnk (create_type, ref_com_id, type_recon, com_type, com_category, com_name,
 com_abb, com_ord_no, com_order_date, valid_to, valid_from, com_spoc, com_app_auth, com_status, back_data, term_ref, proc_status)
values('$create_type', '$ref_com_id', '$reconst_type', '$com_type','$com_cat', '$com_name',
 '$com_abr', '$order_no', '$order_date','$valid_to','$valid_from', $com_spoc,'$app_auth','$com_stat','$back_data', '$terms_ref', '$proc_status')";

if(!mysqli_query($conn, $sql)){
  echo "ERROR!";
}else{
  echo "1 record added!";
}

$stmt = $conn->prepare("INSERT INTO com_cnslt (com_id, cnslt_id, role) VALUES (?, ?, ?)");
$stmt->bind_param("dds", $com, $cnslt, $r);

$com = mysqli_insert_id($conn);

for ($i = 0; $i < count($cnslt_id); $i++)
{
	$cnslt = mysqli_real_escape_string($conn,trim($cnslt_id[$i]));
	$r = mysqli_real_escape_string($conn,trim($role[$i]));

	if (!$stmt->execute())
		echo "failed";
}
?>
