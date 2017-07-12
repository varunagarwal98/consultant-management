<?php include '../Consultant/connect.php';

if (isset($_POST['coord_id']) && isset($_POST['pass']))
{
	$coord_id = mysqli_real_escape_string($conn,trim($_POST['coord_id']));
	$pass = mysqli_real_escape_string($conn,trim($_POST['pass']));
}

$sql = "SELECT coord_id, password from coord_db where coord_id = $coord_id and password = '$pass'";

$result = mysqli_query($conn, $sql);

$row_cnt = mysqli_num_rows($result);
//echo $sql;
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