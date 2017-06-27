<!DOCTYPE html>
<html>
<body>

<?php 
session_start();
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
if (isset($_POST['coord_id']) && isset($_POST['pass']))
{
	$coord_id = mysql_real_escape_string(trim($_POST['coord_id']));
	$password = mysql_real_escape_string(trim($_POST['pass']));
}

$sql = "SELECT coord_id, password from coord_db where coord_id = ".$coord_id." and password = '".$password."'";
// $sql = "select * from coord_db";
$result = mysqli_query($conn, $sql);

$row_cnt = mysqli_num_rows($result);

if ($row_cnt == 0)
{
	$_SESSION['errMsg'] = "Error";
	header('Location: login_page.php');	
}
else
{
	$_SESSION['coord_id'] = $coord_id;
	header('Location: ../Consultant/create_consultant/consultant_create.php');
}
?>

</body>
</html>
