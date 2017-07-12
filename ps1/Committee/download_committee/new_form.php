<?php

$html = '

<html>
<head>
	<style>
	@page {
		margin-left: 2.5cm;
		margin-right: 2.5cm;
	}
	</style>
</head>

<body>

<h3 align="center"><strong>GOVERNMENT OF INDIA</strong></h3><br>
<h4 align="left">CHAIRMAN</h4>
<br><br><br>

<table width="100%">
	<tr>
		<td width="60%">Ref. No. '.$row['com_id'].'</td>
		<td width="30%" align="right">Date:</td>
		</tr>
		</table>
		<br>
		<h3 align="center"> <strong><u> SUB: Constitution of '.$row['com_name'].' </u></strong></h3>
		<h4>'.$row['back_data'].'</h4>
		<br><br><br><br><br>

		<table style="padding: 15px; border-spacing: 20px; margin-left: -40px ">';

?>
