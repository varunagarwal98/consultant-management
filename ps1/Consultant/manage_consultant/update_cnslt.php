<?php include '../connect.php';

$cnslt_id = mysql_real_escape_string(trim($_POST['cnslt_id']));
$coord_id = mysql_real_escape_string(trim($_POST['coord_id']));
$cnslt_type = mysql_real_escape_string(trim($_POST['cnslt_type']));
$cnslt_stat = mysql_real_escape_string(trim($_POST['cnslt_status']));

$sql = "update cnslt_bnk set coord_id = $coord_id, cnslt_type = '$cnslt_type', cnslt_stat = '$cnslt_stat' where cnslt_id = $cnslt_id";

if (mysqli_query($conn,$sql))
{
	echo "successful";
}
else {
	echo "failure";
}

?>