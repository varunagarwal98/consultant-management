function get_consultants()
{
    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("consultant_table").innerHTML = this.responseText;
        }
    };

    var str = "";
    var flag = 0;

    var cnslt_id = document.getElementById('cnslt_id').value;
    var f_name = document.getElementById('f_name').value;
    var l_name = document.getElementById('l_name').value;
    var cnslt_type = document.getElementById('cnslt_type').value;
    var cnslt_status = document.getElementById('cnslt_status').value;
    var coord_id = document.getElementById('coord_id').value; 

    if (cnslt_id != "")
    {
    	str = "cnslt_id = " + cnslt_id;
    	flag = 1;
    }
    if (f_name != "")
    {
    	if (flag == 1)
    		str = str + " and f_name = \'" + f_name + "\'";
    	else
    		str = "f_name = \'" + f_name + "\'";
    	flag = 1;
    }
	if (l_name != "")
    {
    	if (flag == 1)
    		str = str + " and l_name = \'" + l_name + "\'";
    	else
    		str = "l_name = \'" + l_name + "\'";
    	flag = 1;
    }
    if (cnslt_type != "")
    {
    	if (flag == 1)
    		str = str + " and cnslt_type = \'" + cnslt_type + "\'";
    	else
    		str = "cnslt_type = \'" + cnslt_type + "\'";
    	flag = 1;
    }
    if (coord_id != "")
    {
    	if (flag == 1)
    		str = str + " and coord_id = " + coord_id;
    	else
    		str = "coord_id = " + coord_id;
    	flag = 1;
    }
    if (cnslt_status != "")
    {
    	if (flag == 1)
    		str = str + " and cnslt_status = \'" + cnslt_status + "\'";
    	else
    		str = "cnslt_status = \'" + cnslt_status + "\'";
    	flag = 1;
    }

    if (flag == 1)
    	str = "where " + str; 

    xmlhttp.open("GET","display_consultant.php?q="+str,true);
    xmlhttp.send();
    
};