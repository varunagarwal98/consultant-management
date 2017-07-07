<?php 

$q = mysql_real_escape_string(trim($_GET['q']));

include '../../Consultant/connect.php';

$_SESSION['com_id'] = mysql_real_escape_string(trim($q));

$sql = "select com_id, com_name, com_abb from com_bnk where com_id = " . $q;

if($result = mysqli_query($conn, $sql))
{
	if(mysqli_num_rows($result) > 0)
	{
		echo "<table>";
			echo "<tr>";
				echo "<th>Committee ID </th>";
				echo "<th>Committee Name </th>";
				echo "<th>Committee Abb </th>";
			echo "</tr>";
			
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
					echo "<td>" . $row['com_id'] . "</td>";
				    echo "<td>" . $row['com_name'] . "</td>";
				    echo "<td>" . $row['com_abb'] . "</td>";
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