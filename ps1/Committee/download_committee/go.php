<?php
include '../../Consultant/connect.php';

$q = mysqli_real_escape_string($conn,trim($_GET['q']));
$_SESSION['com_id'] = mysqli_real_escape_string($conn,trim($q));

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
