<?php
include '../connect.php';

$q = $_GET['q'];

$sql = "select coord_id from cnslt_bnk where cnslt_id = $q";

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