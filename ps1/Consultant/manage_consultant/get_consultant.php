<?php include '../connect.php';

$q = $_GET['q'];

$sql = "select coord_id, cnslt_type, cnslt_stat, pay_stat from cnslt_bnk where cnslt_id = $q";

if ($result = mysqli_query($conn,$sql))
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		$cid = $row['coord_id'];
		$ct = $row['cnslt_type'];
		$cst = $row['cnslt_stat'];
		$ps = $row['pay_stat'];

		$info = array ($cid, $ct, $cst, $ps);
		echo json_encode($info);
	}

?>