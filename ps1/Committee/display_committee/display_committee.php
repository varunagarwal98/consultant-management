<?php 

$q = trim($_GET['q']);

include '../../Consultant/connect.php';

$sql = "select com_name, com_type, com_abb, com_id, proc_status, com_status
		from com_bnk " . $q;

if($result = mysqli_query($conn, $sql))
{
	if(mysqli_num_rows($result) > 0)
	{
		echo "<table>";
			echo "<tr>";
				echo "<th>Committee Name </th>";
				echo "<th>Committee Type </th>";
				echo "<th>Committee Abbr </th>";
				echo "<th>Committee ID </th>";
				echo "<th>Processing Status </th>";
				echo "<th>Committee Status </th>";
			echo "</tr>";
			
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
				    echo "<td>" . $row['com_name'] . "</td>";
				    echo "<td>" . $row['com_type'] . "</td>";
				    echo "<td>" . $row['com_abb'] . "</td>";
				    echo "<td>" . $row['com_id'] . "</td>";
				    echo "<td>" . $row['proc_status'] . "</td>";
				    echo "<td>" . $row['com_status'] . "</td>";
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