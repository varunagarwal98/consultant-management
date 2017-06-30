<?php 

$q = mysql_real_escape_string(trim($_GET['q']));

include '../connect.php';

$_SESSION['cnslt_id'] = mysql_real_escape_string(trim($q));

$sql = "select cnslt_id, f_name, l_name, cnslt_type, email_1, coord_id, proc_status, cnslt_stat
		from cnslt_bnk where cnslt_id = " . $q;

if($result = mysqli_query($conn, $sql))
{
	if(mysqli_num_rows($result) > 0)
	{
		echo "<table>";
			echo "<tr>";
				echo "<th>Consultant No </th>";
				echo "<th>Consultant Name </th>";
				echo "<th>Consultant Type </th>";
				echo "<th>E-Mail Address </th>";
				echo "<th>Coordinator </th>";
				echo "<th>Processing Status </th>";
				echo "<th>Status </th>";
			echo "</tr>";
			
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
					echo "<td>" . $row['cnslt_id'] . "</td>";
				    echo "<td>" . $row['f_name'] . " " . $row['l_name'] . "</td>";
				    echo "<td>" . $row['cnslt_type'] . "</td>";
				    echo "<td>" . $row['email_1'] . "</td>";
				    echo "<td>" . $row['coord_id'] . "</td>";
				    echo "<td>" . $row['proc_status'] . "</td>";
				    echo "<td>" . $row['cnslt_stat'] . "</td>";
				echo "</tr>";
			}

        echo "</table>";
        // Close result set
	    mysqli_free_result($result);
    } 
}
else
	echo "ERROR: Could not execute $sql.";

?>