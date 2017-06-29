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
			            document.getElementById("coord").value = data[0];
			            document.getElementById("con_type").value = data[1];
			            document.getElementById("con_stat").value = data[2];
			            document.getElementById("payment").value = data[3];

			            if (curr_coord != data[0])
			            {
			                document.getElementById("coord").readOnly = true;
			                document.getElementById("con_type").readOnly = true;
			                document.getElementById("con_stat").readOnly = true;
			                document.getElementById("submit").disabled = "disabled";
			            }
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
		document.getElementById("toggle").innerText = "Show Less";
		status = "more";
	}
	else if (status == "more")
	{
		document.getElementById("show_more").hidden = true;
		document.getElementById("toggle").innerText = "Show More";
		status = "less";
	}
};