<?php include '../connect.php';

$cnslt_id = $_SESSION['cnslt_id'];

$query = "select name2 from cnslt_bnk where cnslt_id = $cnslt_id and size2 >0";

if ($result = mysqli_query($conn, $query))
	if(mysqli_num_rows($result) > 0)
	{
		$query = "SELECT name2, type2, size2, file2 FROM cnslt_bnk WHERE cnslt_id = $cnslt_id";

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

$row_f = array();
$row_a = array();
$row_p = array();
$f = 0;
$p = 0;
$a = 0;

$sql = "select * from f_exp where cnslt_id = $cnslt_id";

if($result = mysqli_query($conn, $sql))
	if(mysqli_num_rows($result) > 0)
	{
		while ($row_t = mysqli_fetch_array($result))
		{
			$row_f[$f] = $row_t;
			$f++;
		}
	}

$sql = "select * from prof_q where cnslt_id = $cnslt_id";

if($result = mysqli_query($conn, $sql))
	if(mysqli_num_rows($result) > 0)
	{		
		while ($row_t = mysqli_fetch_array($result))
		{
			$row_p[$p] = $row_t;
			$p++;
		}
	}

$sql = "select * from sp_assgn where cnslt_id = $cnslt_id";

if($result = mysqli_query($conn, $sql))
	if(mysqli_num_rows($result) > 0)
	{		
		while ($row_t = mysqli_fetch_array($result))
		{
			$row_a[$a] = $row_t;
			$a++;
		}
	}


$mpdf = new mPDF('A4-L');
include 'form_2/form_2_a.php';
$mpdf->WriteHTML($html);

//echo "1";

$i = 0;
while ($i < $p)
{
	$var1 = $row_p[$i][0];
	$var2 = $row_p[$i][1];
	$mpdf->WriteHTML("$var1");
	$mpdf->WriteHTML("  ");
	$mpdf->WriteHTML("$var2");
	$mpdf->WriteHTML(",");
	$i++;
}

include 'form_2/form_2_b.php';
$mpdf->WriteHTML($html2);

$i = 0;
while ($i < $a)
{
	$var1 = $row_a[$i][1];
	$var2 = $row_a[$i][2];
	$mpdf->WriteHTML("$var1");
	$mpdf->WriteHTML("  ");
	$mpdf->WriteHTML("$var2");
	$mpdf->WriteHTML(",");
	$i++;
}

include 'form_2/form_2_c.php';
$mpdf->WriteHTML($html3);

$i = 0;
while ($i < $f)
{
	$var1 = $row_f[$i][1];
	$var2 = $row_f[$i][2];
	$mpdf->WriteHTML("$var1");
	$mpdf->WriteHTML("  ");
	$mpdf->WriteHTML("$var2");
	$mpdf->WriteHTML(",");
	$i++;
}

include 'form_2/form_2_d.php';
$mpdf->WriteHTML($html4);


$mpdf->Output();

?>