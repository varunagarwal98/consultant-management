<?php include '../connect.php';

$q = $_GET['q'];

$sql = "select * from cnslt_bnk where cnslt_id = $q";

if ($result = mysqli_query($conn,$sql))
{
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
	}
}

$sql = "select * from sp_assgn where cnslt_id = $q";

$sql = "select * from f_exp where cnslt_id = $q";

$sql = "select * from prof_q where cnslt_id = $q";

?>