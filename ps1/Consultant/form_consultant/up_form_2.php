<?php include '../connect.php';

$cnslt_id = $_SESSION['cnslt_id'];

if(isset($_POST['upload2']) && $_FILES['userfile2']['size'] > 0)
{
	$fileName = $_FILES['userfile2']['name'];
	$tmpName  = $_FILES['userfile2']['tmp_name'];
	$fileSize = $_FILES['userfile2']['size'];
	$fileType = $_FILES['userfile2']['type'];

	$fp      = fopen($tmpName, 'r');
	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	fclose($fp);

	if(!get_magic_quotes_gpc())
	{
	    $fileName = addslashes($fileName);
	}

	$query = "UPDATE cnslt_bnk SET name2 = '$fileName', file2 = '$content', type2 = '$fileType', size2 = $fileSize where cnslt_id = $cnslt_id";

	//echo $query;
	mysqli_query($conn, $query) or die('Error, query failed');
	$_SESSION['upload'] = "yes";
	header('Location: consultant_form.php');
}
?>