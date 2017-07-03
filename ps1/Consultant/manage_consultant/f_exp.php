<?php include '../connect.php';

$q = $_GET['q'];

$sql = "select field, f_dur from f_exp where cnslt_id = $q";

$data = array();

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
		}
		$data[0] = ($i - 1)/2;
		echo json_encode($data);
	}
}
?>