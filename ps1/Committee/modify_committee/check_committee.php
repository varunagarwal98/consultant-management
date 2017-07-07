<?php
include '../../Consultant/connect.php';

$q = $_GET['q'];

$sql = "select com_id from com_bnk where com_id = $q";

if ($result = mysqli_query($conn,$sql))
{
	if(mysqli_num_rows($result) > 0)
		echo '1';
	else
		echo '0';
}
else
	echo '0';

?>