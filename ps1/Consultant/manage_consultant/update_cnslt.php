<?php include '../connect.php';

$cnslt_id = mysqli_real_escape_string($conn,trim($_POST['cnslt_id']));
$coord_id = mysqli_real_escape_string($conn,trim($_POST['coord_id']));
$cnslt_type = mysqli_real_escape_string($conn,trim($_POST['cnslt_type']));
$cnslt_stat = mysqli_real_escape_string($conn,trim($_POST['cnslt_status']));

$sql = "update cnslt_bnk set coord_id = $coord_id, cnslt_type = '$cnslt_type', cnslt_stat = '$cnslt_stat' where cnslt_id = $cnslt_id";

if (mysqli_query($conn,$sql))
{
	echo "successful";
}
else {
	echo "failure";
}

?>