function com_details (coord_id)
{
	var com_id = document.getElementsByName("com_id")[0].value;
	
	if (com_id == "")
	{
		window.alert("Enter Committee ID");
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
       			window.alert("Committee ID does not exist");
    		}
    		else
    		{
    			xmlhttp2.onreadystatechange = function() 
			    {
			        if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) 
			        {
			            var data = JSON.parse(xmlhttp2.responseText);
			            document.getElementById("details").hidden = false;
			            document.getElementsByName('com_id')[1].value = com_id;
			            document.getElementsByName('com_type')[0].value = data['com_type'];
						document.getElementsByName('create_type')[0].value = data['create_type'];
						document.getElementsByName('ref_com_id')[0].value = data['ref_com_id'];
						document.getElementsByName('reconst_type')[0].value = data['type_recon'];
						document.getElementsByName('com_cat')[0].value = data['com_category'];
						document.getElementsByName('com_name')[0].value = data['com_name'];
						document.getElementsByName('com_abr')[0].value = data['com_abb'];
						document.getElementsByName('order_no')[0].value = data['com_ord_no'];
						document.getElementsByName('order_date')[0].value = data['com_order_date'];
						document.getElementsByName('valid_from')[0].value = data['valid_from'];
						document.getElementsByName('valid_to')[0].value = data['valid_to'];
						document.getElementsByName('com_spoc')[0].value = data['com_spoc'];
						document.getElementsByName('app_auth')[0].value = data['com_app_auth'];
						document.getElementsByName('com_stat')[0].value = data['com_status'];
						document.getElementsByName('back_data')[0].value = data['back_data'];
						document.getElementsByName('terms_ref')[0].value = data['term_ref'];

						document.getElementsByName('com_stat')[0].disabled = false;
						document.getElementsByName('com_spoc')[0].readOnly = false;
						document.getElementsByName('proc_stat')[0].disabled = false;

			            if (coord_id != data['com_spoc'])
			                document.getElementById("submit").disabled = true;
			        
			            if (coord_id == data['com_spoc'])
			                document.getElementById('submit').disabled = false;

			            get_members(com_id);
			        }
			    };

			    xmlhttp2.open("GET","get_committee.php?q="+com_id,true);
			    xmlhttp2.send();
    		}
    	}
    };

    xmlhttp.open("GET","check_committee.php?q="+com_id,true);
    xmlhttp.send();	
};

function get_members(com_id)
{
	
};
