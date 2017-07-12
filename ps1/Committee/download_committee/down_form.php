<?php include '../../Consultant/connect.php';

$q = $_SESSION['com_id'];

$sql = "select file_name from com_bnk where com_id = $q and file_name NOT NULL";

if ($result = mysqli_query($conn, $sql))
  if(mysqli_num_rows($result) > 0)
  {
    $query = "SELECT file_name, file_type, file_size, file FROM com_bnk WHERE com_id = $q";

		$result = mysqli_query($conn, $query) or die('Error, query failed');
		list($name, $type, $size, $content) = mysqli_fetch_array($result);

		header("Content-length: $size");
		header("Content-type: $type");
		header("Content-Disposition: attachment; filename=$name");
		echo $content;
		exit;
	}

$sql = "select * from com_bnk where com_id=$q";
if($result = mysqli_query($conn, $sql))
	if(mysqli_num_rows($result) > 0)
		$row = mysqli_fetch_array($result);

$sql = "select com.cnslt_id, cnslt.f_name, cnslt.l_name, com.role from com_cnslt com, cnslt_bnk cnslt
				where com.com_id=$q and com.cnslt_id = cnslt.cnslt_id";

$p = 0;
if($result = mysqli_query($conn, $sql))
	if(mysqli_num_rows($result) > 0)
	{
		while ($row_t = mysqli_fetch_array($result))
		{
			$members[$p] = $row_t;
			$p++;
		}
	}

// echo $members[0]['f_name'];


require_once __DIR__ . '../../../mPDF/vendor/autoload.php';

$mpdf = new mPDF('A4-L');

if ($row['create_type'] == 'New Committee'){
  include 'new_form.php';
  //echo "new";
}else {
  include 're_form.php';
  //echo "re";
}

$mpdf->WriteHTML($html);
$i = 0;
 while ($i < $p)
 {
   $mpdf->WriteHTML("<tr><td>");
  $mpdf->WriteHTML("$i+1");
  $mpdf->WriteHTML(".</td><td>");
  $var1=$members[$i]['f_name'];
  $var2=$members[$i]['l_name'];
  $var3=$members[$i]['role'];
  $mpdf->WriteHTML("$var1");
  $mpdf->WriteHTML(" ");

  $mpdf->WriteHTML("$var2");
  $mpdf->WriteHTML("</td><td>");
  $mpdf->WriteHTML("$var3");
  $mpdf->WriteHTML("</td></tr>");

   $i++;
 }

$mpdf->Output();

?>
