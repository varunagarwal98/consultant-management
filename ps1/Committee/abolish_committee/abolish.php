<?php 
$q = mysqli_real_escape_string($conn,trim($_GET['q']));
include '../../Consultant/connect.php';

$sql = "update com_bnk set com_status = 'Inactive', proc_status = 'Abolished' where com_id = ".$q;

if(mysqli_query($conn, $sql))
	echo "Committee Abolished!";
else
	echo "Error!";
?>