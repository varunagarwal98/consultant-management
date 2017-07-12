<?php 

$q = mysqli_real_escape_string($conn,trim($_GET['q']));

include '../../Consultant/connect.php';

$sql = "select com_spoc	from com_bnk where com_id = " . $q;

if($result = mysqli_query($conn, $sql))
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		echo $row['com_spoc'];
	}
?>