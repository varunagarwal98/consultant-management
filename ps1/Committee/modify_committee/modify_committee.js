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
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function()
	{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				var data = JSON.parse(xmlhttp.responseText);
				//alert(data['cnslt_id']);
				var i = 0;
				while (i < data[0] - 1)
				{
					fill_table_2 (data[++i], data[++i], data[++i], data[++i]);
					//console.log(data[i]);
				}
			}
	}
	xmlhttp.open("GET","get_committee2.php?q="+com_id,true);
	xmlhttp.send();
};

function fill_table_2(cnslt_id, f_name, l_name, role)
{
	//var html = x.closest('tr').clone().find('td:last').remove().end().prop('outerHTML');
	var row = document.createElement('tr');
	var col1 = document.createElement('td');
	var col2 = document.createElement('td');
	var col3 = document.createElement('td');
  var col4 = document.createElement('td');
	row.appendChild(col1);
	row.appendChild(col2);
	row.appendChild(col3);
	row.appendChild(col4);

	var table = document.getElementById("dest_table");
	var rowno = table.rows.length;
	var row = table.insertRow(rowno);
	--rowno;
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
	var cell4 = row.insertCell(3);

	var t1 = document.createElement("input");
	t1.type = "button";
	t1.name = 'a' + '[' + rowno + ']';
	t1.value = '-';
	t1.onclick = function(){
		table.deleteRow(rowno+1);
	};
	cell1.appendChild(t1);
	var t2 = document.createElement("input");
	t2.type = "text";
	t2.name = 'id' + '[' + rowno + ']';
	t2.id = "cell";
	t2.value = cnslt_id;
	cell2.appendChild(t2);
	document.getElementById("cell").readOnly = "true";
	var t3 = document.createElement("input");
	t3.type = "text";
	t3.name = 'name' + '[' + rowno + ']';
	t3.id = "cell2";
	t3.value = f_name + ' ' + l_name;
	cell3.appendChild(t3);
	document.getElementById("cell2").readOnly = "true";
	var t4 = document.createElement("select");

	var o1 = document.createElement("option");
	o1.innerHTML = "Chairman";
	o1.value = "Chairman";
	t4.add(o1,null);


	var o2 = document.createElement("option");
	o2.innerHTML = "Vice Chairman";
	o2.value = "Vice Chairman";
	t4.add(o2,null);

	var o3 = document.createElement("option");
	o3.innerHTML = "Member";
	o3.value = "Member";
	t4.add(o3,null);

	var o4 = document.createElement("option");
	o4.innerHTML = "Secretary";
	o4.value = "Secretary";
	t4.add(o4,null);

	var o5 = document.createElement("option");
	o5.innerHTML = "Member Secretary";
	o5.value = "Member Secretary";
	t4.add(o5,null);

	var o6 = document.createElement("option");
	o6.innerHTML = "Invitee";
	o6.value = "Invitee";
	t4.add(o6,null);

	var o7 = document.createElement("option");
	o7.innerHTML = "Permanent Invitee";
	o7.value = "Permanent Invitee";
	t4.add(o7,null);

	var o8 = document.createElement("option");
	o8.innerHTML = "Alternate Member";
	o8.value = "Alternate Member";
	t4.add(o8,null);

	var o9 = document.createElement("option");
	o9.innerHTML = "Convenor";
	o9.value = "Convenor";
	t4.add(o9,null);

	var o10 = document.createElement("option");
	o10.innerHTML = "Co-opted Member";
	o10.value = "Co-opted Member";
	t4.add(o10,null);
	t4.name = 'role' + '[' + rowno + ']';
	t4.value = role;
	cell4.appendChild(t4);
};
