<?php 
$q = mysql_real_escape_string(trim($_GET['q']));
include '../../Consultant/connect.php';

$sql = "update com_bnk set com_status = 'IN', proc_status = 'AB' where com_id = ".$q;

if(mysqli_query($conn, $sql))
	echo "Committee Abolished!";
else
	echo "Error!";
?>