<?php include '../../Consultant/connect.php';

include '../post_committee_fields.php';

$com_id = $_POST['com_id'];

$sql = "update com_bnk set create_type = '$create_type', ref_com_id = '$ref_com_id', type_recon = '$reconst_type', com_type = '$com_type', com_category = '$com_cat', com_name = '$com_name', com_abb = '$com_abr', com_ord_no = '$order_no', com_order_date = '$order_date', valid_to = '$valid_to', valid_from = '$valid_from', com_spoc = $com_spoc, com_app_auth = '$app_auth', com_status = '$com_stat', back_data = '$back_data', term_ref = '$terms_ref', proc_status = '$proc_status' where com_id = $com_id";

if(!mysqli_query($conn, $sql))
	echo "error";
$query = "delete from com_cnslt where com_id=$com_id";
if(!mysqli_query($conn, $query))
	echo "error";

$stmt = $conn->prepare("INSERT INTO com_cnslt (com_id, cnslt_id, role) VALUES (?, ?, ?)");
$stmt->bind_param("dds", $com, $cnslt, $r);

$com = $com_id;

for ($i = 0; $i < count($cnslt_id); $i++)
{
	$cnslt = mysqli_real_escape_string($conn,trim($cnslt_id[$i]));
	$r = mysqli_real_escape_string($conn,trim($role[$i]));

	if (!$stmt->execute())
		echo "failed";
}
?>
