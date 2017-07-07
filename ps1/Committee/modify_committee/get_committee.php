<?php include '../../Consultant/connect.php';

$q = $_GET['q'];

$sql = "select * from com_bnk where com_id = $q";

if ($result = mysqli_query($conn,$sql))
{
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
	}
}
?>