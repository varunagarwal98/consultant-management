<?php

$q = trim($_GET['q']);

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "consultant";

//Create connection
$conn = new mysqli($servername, $username, $password, $db);

//Check connection
if (!$conn) {
   die('Connection failed: ' . mysql_error());
}


$sql = "select cnslt_id, f_name, l_name
		from cnslt_bnk " . $q;

if($result = mysqli_query($conn, $sql))
{
	// if(mysqli_num_rows($result) > 0)
	// {
	// 		echo "<table>";
	// 		while($row = mysqli_fetch_array($result))
	// 		{
	// 			echo "<tr>";
  //          		//echo "<td><input type="checkbox" class="checkbox">;</td>" ;
  //          		echo "<td>" . $row['cons_id'] . "</td>";
	// 			echo "<td>" . $row['f_name'] . " " . $row['l_name'] . "</td>";
	// 			echo "</tr>";
	// 		}
	//
  //       echo "</table>";
  //       // Close result set
	//     mysqli_free_result($result);
  //   }

	//if(mysqli_num_rows($result) > 0)
	//{

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
			// echo "
			// <script type=\"text/javascript\">
			// 		$(document).ready(function() {
			// 				$(\".use-button\").click(function() {
			// 				var html = $(this).closest(\"tr\")
			// 					.clone().find(\'td:last\')
			// 					.remove().end().prop(\'outerHTML\');
      //
			// 				include 'committee_fields.php';
			// 				$(\"#dest_tables\").append(html);
			// 				});
			// 			});
			// </script>
			// ";
		}

				echo "</table>";
				// Close result set
			mysqli_free_result($result);
	//	}
}
else
	echo "ERROR: Could not execute $sql.";


?>
