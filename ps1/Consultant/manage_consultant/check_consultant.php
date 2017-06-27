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