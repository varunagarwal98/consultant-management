<?php

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

	$query = "INSERT INTO cnslt_bnk (form_1a) VALUES ('$fileName', '$content')";

	mysql_query($query) or die('Error, query failed');
	
	echo "<br>File $fileName uploaded<br>";
}

?>