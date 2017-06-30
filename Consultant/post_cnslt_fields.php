<?php

$f_name = isset($_POST['f_name'])?mysql_real_escape_string(trim($_POST['f_name'])):NULL;
$l_name = mysql_real_escape_string(trim($_POST['l_name']));
$mid_name = mysql_real_escape_string(trim($_POST['mid_name']));
$title = mysql_real_escape_string(trim($_POST['title']));
$dp_name = isset($_POST['dp_name'])?mysql_real_escape_string(trim($_POST['dp_name'])):NULL;
$dp_name = mysql_real_escape_string(trim($_POST['dp_name']));
$add_line_1 = mysql_real_escape_string(trim($_POST['add_line_1']));
$add_line_2 = mysql_real_escape_string(trim($_POST['add_line_2']));
$city = mysql_real_escape_string(trim($_POST['city']));
$pincode = mysql_real_escape_string(trim($_POST['pincode']));
$state = mysql_real_escape_string(trim($_POST['state']));
$country = mysql_real_escape_string(trim($_POST['country']));
$mob_no = mysql_real_escape_string(trim($_POST['mob_no']));
$email_1 = mysql_real_escape_string(trim($_POST['email_1']));
$email_2 = mysql_real_escape_string(trim($_POST['email_2']));
$pan_no = mysql_real_escape_string(trim($_POST['pan_no']));
$aadhaar_no = mysql_real_escape_string(trim($_POST['aadhaar_no']));
$dob = mysql_real_escape_string(trim($_POST['dob']));
$cnslt_type = mysql_real_escape_string(trim($_POST['cnslt_type']));
$pr_assgn = mysql_real_escape_string(trim($_POST['pr_assgn']));
$pay_stat = mysql_real_escape_string(trim($_POST['pay_stat']));
$cnslt_stat = mysql_real_escape_string(trim($_POST['cnslt_stat']));
$category = mysql_real_escape_string(trim($_POST['category']));
$degree = mysql_real_escape_string(trim($_POST['degree']));
$discipline = mysql_real_escape_string(trim($_POST['discipline']));
$ifsc_code = mysql_real_escape_string(trim($_POST['ifsc_code']));
$branch_name = mysql_real_escape_string(trim($_POST['branch_name']));
$acc_no = mysql_real_escape_string(trim($_POST['acc_no']));
$bank_name = mysql_real_escape_string(trim($_POST['bank_name']));
$retired_bool = mysql_real_escape_string(trim($_POST['retired_bool']));
$prof_eng = mysql_real_escape_string(trim($_POST['prof_eng']));
$prof_eng_det = mysql_real_escape_string(trim($_POST['prof_eng_det']));
$eng_comp = mysql_real_escape_string(trim($_POST['eng_comp']));
$add_comp = mysql_real_escape_string(trim($_POST['add_comp']));
$desg_comp = mysql_real_escape_string(trim($_POST['desg_comp']));
$grade_comp = mysql_real_escape_string(trim($_POST['grade_comp']));
$nature_comp = mysql_real_escape_string(trim($_POST['nature_comp']));
$basic_sal = mysql_real_escape_string(trim($_POST['basic_sal']));
$gross_sal = mysql_real_escape_string(trim($_POST['gross_sal']));
$add_info = mysql_real_escape_string(trim($_POST['add_info']));
$f_sp1 = mysql_real_escape_string(trim($_POST['f_sp1']));
$f_sp2 = mysql_real_escape_string(trim($_POST['f_sp2']));
$f_sp3 = mysql_real_escape_string(trim($_POST['f_sp3']));
$f_sp4 = mysql_real_escape_string(trim($_POST['f_sp4']));
$f_sp5 = mysql_real_escape_string(trim($_POST['f_sp5']));

$qlf = $_POST['qlf'];
$exp = $_POST['exp'];
$assgn = $_POST['assgn'];
$dur= $_POST['dur'];
$field = $_POST['field'];
$f_dur = $_POST['f_dur'];

?>