function cnslt_details(curr_coord)
{
	var cnslt_id = document.getElementById("cnslt_id").value;
	
	if (cnslt_id == "")
	{
		window.alert("Enter Consultant ID");
		return;
	}

	var xmlhttp = new XMLHttpRequest();
	var xmlhttp2 = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() 
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
        	var check = xmlhttp.responseText;
        	if (check == 0)
    		{
       			window.alert("Consultant does not exist");
    		}
    		else
    		{
    			xmlhttp2.onreadystatechange = function() 
			    {
			        if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) 
			        {
			            var data = JSON.parse(xmlhttp2.responseText);
			            document.getElementById("cnslt_id_2").value = cnslt_id;
			            document.getElementById("cnslt_id_3").value = cnslt_id;
			            document.getElementById("coord").value = data[0];
			            document.getElementById("con_type").value = data[1];
			            document.getElementById("con_stat").value = data[2];
			            document.getElementById("payment").value = data[3];

			            if (curr_coord != data[0])
			            {
			                document.getElementById("coord").readOnly = true;
			                document.getElementById("con_type").readOnly = true;
			                document.getElementById("con_stat").readOnly = true;
			                document.getElementById("submit").disabled = true;
			                document.getElementById("more_submit").disabled = true;
			            }

			            if (curr_coord == data[0])
			            {
			            	document.getElementById("coord").readOnly = false;
			                document.getElementById("con_type").readOnly = false;
			                document.getElementById("con_stat").readOnly = false;
			                document.getElementById("submit").disabled = false;
			                document.getElementById("more_submit").disabled = false;
			            }
			            bigger_form(cnslt_id);
			        }
			    };

			    xmlhttp2.open("GET","get_consultant.php?q="+cnslt_id,true);
			    xmlhttp2.send();
    		}
    	}
    };

    xmlhttp.open("GET","check_consultant.php?q="+cnslt_id,true);
    xmlhttp.send();	
};

var status = "less";

function show_more()
{
	if (status == "less")
	{
		document.getElementById("show_more").hidden = false;
		document.getElementById("small_form").hidden = true;
		document.getElementById("toggle").innerText = "Show Less";
		status = "more";
	}
	else if (status == "more")
	{
		document.getElementById("show_more").hidden = true;
		document.getElementById("small_form").hidden = false;
		document.getElementById("toggle").innerText = "Show More";
		status = "less";
	}
};

function bigger_form(cnslt_id)
{
	var xmlhttp3 = new XMLHttpRequest();

	xmlhttp3.onreadystatechange = function() 
    {
        if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200) 
        {
        	var row = JSON.parse(xmlhttp3.responseText);

        	document.getElementsByName("coord_id")[0].value = row['coord_id'];
			document.getElementsByName("f_name")[0].value = row['f_name'];
			document.getElementsByName("l_name")[0].value = row['l_name'];
			document.getElementsByName("mid_name")[0].value = row['mid_name'];
			document.getElementsByName("title")[0].value = row['title'];
			document.getElementsByName("dp_name")[0].value = row['dp_name'];
			document.getElementsByName("add_line_1")[0].value = row['add_line_1'];
			document.getElementsByName("add_line_2")[0].value = row['add_line_2'];
			document.getElementsByName("city")[0].value = row['city'];
			document.getElementsByName("pincode")[0].value = row['pincode'];
			document.getElementsByName("state")[0].value = row['state'];
			document.getElementsByName("country")[0].value = row['country'];
			document.getElementsByName("mob_no")[0].value = row['mob_no'];
			document.getElementsByName("email_1")[0].value = row['email_1'];
			document.getElementsByName("email_2")[0].value = row['email_2'];
			document.getElementsByName("pan_no")[0].value = row['pan_no'];
			document.getElementsByName("aadhaar_no")[0].value = row['aadhaar_no'];
			document.getElementsByName("dob")[0].value = row['dob'];
			document.getElementsByName("cnslt_type")[0].value = row['cnslt_type'];
			document.getElementsByName("pr_assgn")[0].value = row['assgn'];
			document.getElementsByName("pay_stat")[0].value = row['pay_stat'];
			document.getElementsByName("cnslt_stat")[0].value = row['cnslt_stat'];
			document.getElementsByName("category")[0].value = row['category'];
			document.getElementsByName("degree")[0].value = row['degree'];
			document.getElementsByName("discipline")[0].value = row['discipline'];
			document.getElementsByName("ifsc_code")[0].value = row['ifsc_code'];
			document.getElementsByName("branch_name")[0].value = row['branch_name'];
			document.getElementsByName("acc_no")[0].value = row['acc_no'];
			document.getElementsByName("bank_name")[0].value = row['bank_name'];
			document.getElementsByName("retired_bool")[0].value = row['retired_bool'];
			document.getElementsByName("prof_eng")[0].value = row['prof_eng'];
			document.getElementsByName("prof_eng_det")[0].value = row['prof_eng_det'];
			document.getElementsByName("eng_comp")[0].value = row['eng_comp'];
			document.getElementsByName("add_comp")[0].value = row['add_comp'];
			document.getElementsByName("desg_comp")[0].value = row['desg_comp'];
			document.getElementsByName("grade_comp")[0].value = row['grade_comp'];
			document.getElementsByName("nature_comp")[0].value = row['nature_comp'];
			document.getElementsByName("basic_sal")[0].value = row['basic_sal'];
			document.getElementsByName("gross_sal")[0].value = row['gross_sal'];
			document.getElementsByName("add_info")[0].value = row['add_info'];
			document.getElementsByName("f_sp1")[0].value = row['f_sp1'];
			document.getElementsByName("f_sp2")[0].value = row['f_sp2'];
			document.getElementsByName("f_sp3")[0].value = row['f_sp3'];
			document.getElementsByName("f_sp4")[0].value = row['f_sp4'];
			document.getElementsByName("f_sp5")[0].value = row['f_sp5'];

        }
    }

    xmlhttp3.open("GET","big_form.php?q="+cnslt_id,true);
    xmlhttp3.send();
};