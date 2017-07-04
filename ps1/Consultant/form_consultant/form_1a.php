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

<h4 align="right">FORM -1A</h4>

<h4 align="center">
Declaration by Specialist Engaged / Proposed to be Engaged in AERB Work <br>
(To avoid potential conflict of interest situtations)
</h4><br>

<table style="padding: 15px; border-spacing: 20px">
	<tr>
		<td>1.</td>
		<td>Name</td>
		<td>: '.$row['f_name'].' '.$row['mid_name'].' '.$row['l_name'].'</td>
	</tr><br>
	<tr>
		<td>2.</td>
		<td>Proposed Assignment in AERB</td>
		<td>: '.$row['assgn'].'</td>
	</tr><br>
	<tr>
		<td>3.</td>
		<td>Present Professional Engagement<br>(Full time / Part time / Consultancy/<br> Others [Specify])</td>
		<td>: '.$row['prof_eng'].'</td>
	</tr><br>
	
	<tr>
		<td>4.</td>
		<td>Name and Address of the engaging<br> Company/Institution</td>
		<td>: '.$row['eng_comp'].'<br>'.$row['add_comp'].'</td>
	</tr><br>
	<tr>
		<td></td>
		<td>Designation in Company/Institution</td>
		<td>: '.$row['desg_comp'].'</td>
	</tr><br>
	<tr>
		<td>5.</td>
		<td>Nature of Work: (Please elaborate<br> areas of work/assignments) </td>
		<td>: '.$row['nature_comp'].'</td>
	</tr>
</table>

<br>
<br>
<p align="center">
I undertake to inform AERB promptly if there is any change in the above statement.
</p>
<br><br><br><br>

<table width="100%">
	<tr>
		<td width="50%">Date:</td>
		<td width="50%" align="right">(Signature of the Specialist)</td>
	</tr>
</table>

</body>
';
?>