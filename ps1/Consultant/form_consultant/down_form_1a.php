<?php include '../connect.php';

$cnslt_id = $_SESSION['cnslt_id'];

$query = "select file_name from cnslt_bnk where cnslt_id = $cnslt_id and file_size > 0";

if ($result = mysqli_query($conn, $query))
	if(mysqli_num_rows($result) > 0)
	{
		$query = "SELECT file_name, file_type, file_size, form_1a FROM cnslt_bnk WHERE cnslt_id = $cnslt_id";

		$result = mysqli_query($conn, $query) or die('Error, query failed');
		list($name, $type, $size, $content) = mysqli_fetch_array($result);

		header("Content-length: $size");
		header("Content-type: $type");
		header("Content-Disposition: attachment; filename=$name");
		echo $content;
		exit;
	}

require_once __DIR__ . '../../../mPDF/vendor/autoload.php';

$sql = "select * from cnslt_bnk where cnslt_id = $cnslt_id";

if($result = mysqli_query($conn, $sql))
	if(mysqli_num_rows($result) > 0)
		$row = mysqli_fetch_array($result);

$mpdf = new mPDF('A4-L');
include 'form_1a.php';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>