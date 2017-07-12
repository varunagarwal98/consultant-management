<?php

$f_name = isset($_POST['f_name'])?mysqli_real_escape_string($conn,trim($_POST['f_name'])):NULL;
$l_name = mysqli_real_escape_string($conn,trim($_POST['l_name']));
$mid_name = mysqli_real_escape_string($conn,trim($_POST['mid_name']));
$title = mysqli_real_escape_string($conn,trim($_POST['title']));
$dp_name = isset($_POST['dp_name'])?mysqli_real_escape_string($conn,trim($_POST['dp_name'])):NULL;
$dp_name = mysqli_real_escape_string($conn,trim($_POST['dp_name']));
$add_line_1 = mysqli_real_escape_string($conn,trim($_POST['add_line_1']));
$add_line_2 = mysqli_real_escape_string($conn,trim($_POST['add_line_2']));
$city = mysqli_real_escape_string($conn,trim($_POST['city']));
$pincode = mysqli_real_escape_string($conn,trim($_POST['pincode']));
$state = mysqli_real_escape_string($conn,trim($_POST['state']));
$country = mysqli_real_escape_string($conn,trim($_POST['country']));
$mob_no = mysqli_real_escape_string($conn,trim($_POST['mob_no']));
$email_1 = mysqli_real_escape_string($conn,trim($_POST['email_1']));
$email_2 = mysqli_real_escape_string($conn,trim($_POST['email_2']));
$pan_no = mysqli_real_escape_string($conn,trim($_POST['pan_no']));
$aadhaar_no = mysqli_real_escape_string($conn,trim($_POST['aadhaar_no']));
$dob = mysqli_real_escape_string($conn,trim($_POST['dob']));
$cnslt_type = mysqli_real_escape_string($conn,trim($_POST['cnslt_type']));
$pr_assgn = mysqli_real_escape_string($conn,trim($_POST['pr_assgn']));
$pay_stat = mysqli_real_escape_string($conn,trim($_POST['pay_stat']));
$cnslt_stat = mysqli_real_escape_string($conn,trim($_POST['cnslt_stat']));
$category = mysqli_real_escape_string($conn,trim($_POST['category']));
$degree = mysqli_real_escape_string($conn,trim($_POST['degree']));
$discipline = mysqli_real_escape_string($conn,trim($_POST['discipline']));
$ifsc_code = mysqli_real_escape_string($conn,trim($_POST['ifsc_code']));
$branch_name = mysqli_real_escape_string($conn,trim($_POST['branch_name']));
$acc_no = mysqli_real_escape_string($conn,trim($_POST['acc_no']));
$bank_name = mysqli_real_escape_string($conn,trim($_POST['bank_name']));
$retired_bool = mysqli_real_escape_string($conn,trim($_POST['retired_bool']));
$prof_eng = mysqli_real_escape_string($conn,trim($_POST['prof_eng']));
$prof_eng_det = mysqli_real_escape_string($conn,trim($_POST['prof_eng_det']));
$eng_comp = mysqli_real_escape_string($conn,trim($_POST['eng_comp']));
$add_comp = mysqli_real_escape_string($conn,trim($_POST['add_comp']));
$desg_comp = mysqli_real_escape_string($conn,trim($_POST['desg_comp']));
$grade_comp = mysqli_real_escape_string($conn,trim($_POST['grade_comp']));
$nature_comp = mysqli_real_escape_string($conn,trim($_POST['nature_comp']));
$basic_sal = mysqli_real_escape_string($conn,trim($_POST['basic_sal']));
$gross_sal = mysqli_real_escape_string($conn,trim($_POST['gross_sal']));
$add_info = mysqli_real_escape_string($conn,trim($_POST['add_info']));
$f_sp1 = mysqli_real_escape_string($conn,trim($_POST['f_sp1']));
$f_sp2 = mysqli_real_escape_string($conn,trim($_POST['f_sp2']));
$f_sp3 = mysqli_real_escape_string($conn,trim($_POST['f_sp3']));
$f_sp4 = mysqli_real_escape_string($conn,trim($_POST['f_sp4']));
$f_sp5 = mysqli_real_escape_string($conn,trim($_POST['f_sp5']));

$qlf = $_POST['qlf'];
$exp = $_POST['exp'];
$assgn = $_POST['assgn'];
$dur= $_POST['dur'];
$field = $_POST['field'];
$f_dur = $_POST['f_dur'];

?>