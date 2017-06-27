<?php
session_start();
unset($_SESSION['coord_id']);
session_destroy(); 
header("Location: login_page.php");
?>
