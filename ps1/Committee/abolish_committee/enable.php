<?php 

$q = mysql_real_escape_string(trim($_GET['q']));

include '../connect.php';

$sql = "select coord_id	from com_bnk where com_id = " . $q;

if($result = mysqli_query($conn, $sql))
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		echo $row['coord_id'];
	}
?>