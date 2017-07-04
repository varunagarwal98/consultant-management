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

<h4 align="right">FORM -II</h4>

<h3 align="center"><strong>
GOVERNMENT OF INDIA<br>
ATOMIC ENERGY REGULATORY BOARD</strong>
</h3><br>

<table width="100%">
	<tr>
		<td width="30%">Ref. No. AERB/Expert/ </td>
		<td width="40%">'.$row['cnslt_id'].'</td>
		<td width="30%">Date:</td>
	</tr>
</table>
<br>
<h3 align="center"> <strong><u> SUB: PAYMENT OF HONORARIUM TO SPECIALISTS IN AERB WORK </u></strong></h3>
<br>

<p>
It is hereby proposed to engage the services of '.$row['title'].' <u>'.$row['f_name'].' '.$row['mid_name'].' '.$row['l_name'].' </u>for official work at AERB on
payment of honorarium. His/Her bio-data is furnished below. Prior approval of
Chairman, AERB is requested for engaging the services of Specialists.
</p>

<table style="padding: 15px; border-spacing: 20px; margin-left: -40px ">
	<tr>
		<td>1.</td>
		<td>Name</td>
		<td>:</td>
		<td>'.$row['f_name'].' '.$row['mid_name'].' '.$row['l_name'].'</td>
	</tr><br>
	<tr>
		<td>2.</td>
		<td>Full Address</td>
		<td>:</td>
		<td>'.$row['add_line_1'].'  '.$row['add_line_2'].'  '.$row['city'].'  '.$row['pincode'].'  '.$row['state'].'  '.$row['country'].'</td>
	</tr><br>
	<tr>
		<td>3.</td>
		<td>Present Occupation including designation</td>
		<td>:</td>
		<td>'.$row['prof_eng'].'  '.$row['desg_eng'].'</td>
	</tr><br>
	<tr>
		<td>4.</td>
		<td>If, retired, designation and emouluments<br> at the time of retiremetnt</td>
		<td>:</td>
		<td>'.$row['retired_bool'].'  '.$row['desg_eng'].'</td>
	</tr>
	<tr>
		<td></td>
		<td align="right"><u>Salary</u><br>Basic:<br>Gross:<br></td>
		<td></td>
		<td><br> '.$row['basic_sal'].' <br> '.$row['gross_sal'].' </td>
	</tr><br>
	<tr>
		<td>5.</td>
		<td>Academic Qualification</td>
		<td>:</td>
		<td>'.$row['degree'].' '.$row['discipline'].'</td>
	</tr><br>
	<tr>
		<td>6.</td>
		<td>Professional Qualification and experience</td>
		<td>:</td>
		<td>'
			$i = 0;
			while (row_p[$i][0])
			{
				echo $row_p[$i][0];
				echo "  ";
				echo $row_p[$i][1];
				nl2br();
				$i++;
			}
		'</td>
	</tr>
	<tr>
		<td>7.</td>
		<td>Special assignments, if any, carried out<br> for national/international organisations.</td>
		<td>:</td>
		<td></td>
	</tr><br>
	<tr>
		<td>8.</td>
		<td>Field(s) of experience</td>
		<td>:</td>
		<td></td>
	</tr><br>
	<tr>
		<td>9.</td>
		<td>Assignment with which the specialist<br> is proposed to be associated</td>
		<td>:</td>
		<td>'.$row['assgn'].'</td>
	</tr><br>
	<tr>
		<td>10.</td>
		<td>Minimum no. of days<br> proposed to be engaged</td>
		<td>:</td>
		<td></td>
	</tr><br>
	<tr>
		<td>11.</td>
		<td>Category assigned</td>
		<td>:</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td align="right">Category No.:<br>Rate:</td>
		<td></td>
		<td></td>
	</tr>
</table>
<br><br>

<p align="right">
Signature of the Officer<br>
proposing the Honorarium
</p>
<br>
<p align="center">Approved</p>
<br>
<p align="right">Chariman, AERB</p>

</body>
</html>
';
?>