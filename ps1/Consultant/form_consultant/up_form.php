<?php include '../connect.php';

$cnslt_id = $_SESSION['cnslt_id'];

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

	$query = "UPDATE cnslt_bnk SET file_name = '$fileName', form_1a = '$content', file_type = '$fileType', file_size = $fileSize where cnslt_id = $cnslt_id";

	echo $query;
	// mysqli_query($conn, $query) or die('Error, query failed');
	// $_SESSION['upload'] = "yes";
	// header('Location: consultant_form.php');
}
?>