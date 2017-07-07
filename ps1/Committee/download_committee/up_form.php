<?php include '../../Consultant/connect.php';

$com_id = $_SESSION['com_id'];

if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
	$fileName = $_FILES['userfile']['name'];
	$tmpName  = $_FILES['userfile']['tmp_name'];
	$fileSize = $_FILES['userfile']['size'];
	$fileType = $_FILES['userfile']['type'];

	$fp      = fopen($tmpName, 'r');
	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	fclose($fp);

	if(!get_magic_quotes_gpc())
	{
	    $fileName = addslashes($fileName);
	}

	$query = "update com_bnk set file_name = '$fileName', file = '$content', file_type = '$fileType', file_size = $fileSize where com_id = $com_id";

	mysqli_query($conn, $query) or die('Error, query failed');
	$_SESSION['upload'] = "yes";
	header('Location: download_page.php');
}
?>