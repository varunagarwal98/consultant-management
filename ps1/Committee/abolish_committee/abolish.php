<?php 
$q = mysql_real_escape_string(trim($_GET['q']));
include '../connect.php';

$sql = "udpate com_bnk set com_status = 'abolished' where com_id = ".$q;

if(mysqli_query($conn, $sql))
	echo "Committee Abolished!";
else
	echo "Error!";
?>