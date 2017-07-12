<?php

$q = trim($_GET['q']);

include '../../Consultant/connect.php';

$sql = "select cnslt_id, f_name, l_name
		from cnslt_bnk where cnslt_stat <> 'Inactive'" . $q;

if($result = mysqli_query($conn, $sql))
{
	echo "<table>";
	echo "<tr>";
		echo "<th width=\"10%\"></th>";
		echo "<th width=\"30%\">Cnslt ID</th>";
		echo "<th width=\"60%\">Cnslt Name</th>";
	echo "</tr>";

	while($row = mysqli_fetch_array($result))
	{
	  $cnslt_id = $row['cnslt_id'];
	  $f_name = $row['f_name'];
	  $l_name = $row['l_name'];
			
		echo '<tr>';
		echo "<td><input type='button' value = '+' onclick='fill_table($cnslt_id, \"$f_name\", \"$l_name\")'></td>";
					//echo "<td><button>+</button></td>" ;
	    echo "<td>$cnslt_id</td>";
		echo "<td>$f_name $l_name</td>";
		echo "</tr>";
		
	}

	echo "</table>";
		// Close result set
	mysqli_free_result($result);
}
else
	echo "ERROR: Could not execute $sql.";


?>
