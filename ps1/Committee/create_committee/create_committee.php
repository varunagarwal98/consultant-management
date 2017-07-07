<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$db = "consultant";

//Create connection
$con = new mysqli($servername, $username, $password, $db);

//Check connection
if (!$con) {
   die('Connection failed: ' . mysql_error());
}

//$coord_id = $_SESSION['coord_id'];
include '../post_committee_fields.php';

$sql = "INSERT INTO com_bnk (create_type, ref_com_id, type_recon, com_type, com_category, com_name,
 com_abb, com_ord_no, com_order_date, valid_to, valid_from, com_spoc, com_app_auth, com_status, back_data, term_ref, proc_status)
values('$create_type', '$ref_com_id', '$reconst_type', '$com_type','$com_cat', '$com_name',
 '$com_abr', '$order_no', '$order_date','$valid_to','$valid_from', $com_spoc,'$app_auth','$com_stat','$back_data', '$terms_ref', '$proc_status')";

if(!mysqli_query($con, $sql)){
  echo "ERROR!";
}else{
  echo "1 record added!";
}

?>
