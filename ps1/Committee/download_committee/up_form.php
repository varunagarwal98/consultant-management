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

	$query = "insert into com_form_bnk (com_id, file_name, file, file_type, file_size) 
				values ($com_id, '$fileName', '$content', '$fileType', $fileSize)";

	echo $query;
	mysqli_query($conn, $query) or die('Error, query failed');
	$_SESSION['upload'] = "yes";
	header('Location: download_page.php');
}
?>