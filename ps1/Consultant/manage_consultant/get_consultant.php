<?php session_start(); 

$servername = "localhost";
$username = "root";
$password = "root";
$db = "consultant";

//Create connection
$conn = new mysqli($servername, $username, $password, $db);

//Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$q = $_GET['q'];

$sql = "select coord_id, cnslt_type, cnslt_stat, pay_stat
 		from cnslt_bnk where cnslt_id = $q";

if ($result = mysqli_query($conn,$sql))
{
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		$cid = $row['coord_id'];
		$ct = $row['cnslt_type'];
		$cst = $row['cnslt_stat'];
		$ps = $row['pay_stat'];

		$info = array ($cid, $ct, $cst, $ps);
		//$info2 = serialize($info)
		echo json_encode($info);
		//echo "s";
	}
}	
else
	echo "failure";

?>