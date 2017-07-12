<?php include '../../Consultant/connect.php';

$q = $_GET['q'];
$sql = "select com.cnslt_id, cnslt.f_name, cnslt.l_name, com.role from com_cnslt com, cnslt_bnk cnslt
				where com.com_id=$q and com.cnslt_id = cnslt.cnslt_id";

if ($result = mysqli_query($conn,$sql))
{
	if(mysqli_num_rows($result) > 0)
	{
		$i = 1;
		while($row = mysqli_fetch_array($result))
		{
			$data[$i] = $row[0];
			++$i;
			$data[$i] = $row[1];
			++$i;
			$data[$i] = $row[2];
			++$i;
			$data[$i] = $row[3];
			++$i;
		}
		$data[0] = $i;
		echo json_encode($data);
	}
}
?>
