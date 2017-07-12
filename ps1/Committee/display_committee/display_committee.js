function get_com()
{
    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("com_table").innerHTML = this.responseText;
        }
    };

    var str = "";
    var flag = 0;

    var com_id = document.getElementsByName('com_id')[0].value;
    var com_type = document.getElementsByName('com_type')[0].value;
    var com_cat = document.getElementsByName('com_cat')[0].value;
    var com_abr = document.getElementsByName('com_abr')[0].value;
    var com_stat = document.getElementsByName('com_stat')[0].value;
    var com_proc_status = document.getElementsByName('com_proc_status')[0].value; 

    if (com_id != "")
    {
    	str = "com_id = " + com_id;
    	flag = 1;
    }
    if (com_type != "")
    {
    	if (flag == 1)
    		str = str + " and com_type = \'" + com_type + "\'";
    	else
    		str = "com_type = \'" + com_type + "\'";
    	flag = 1;
    }
	if (com_cat != "")
    {
    	if (flag == 1)
    		str = str + " and com_cat = \'" + com_cat + "\'";
    	else
    		str = "com_cat = \'" + com_cat + "\'";
    	flag = 1;
    }
    if (com_abr != "")
    {
    	if (flag == 1)
    		str = str + " and com_abr = \'" + com_abr + "\'";
    	else
    		str = "com_abr = \'" + com_abr + "\'";
    	flag = 1;
    }
    if (com_stat != "")
    {
    	if (flag == 1)
    		str = str + " and com_stat = " + com_stat;
    	else
    		str = "com_stat = " + com_stat;
    	flag = 1;
    }
    if (com_proc_status != "")
    {
    	if (flag == 1)
    		str = str + " and com_proc_status = \'" + com_proc_status + "\'";
    	else
    		str = "com_proc_status = \'" + com_proc_status + "\'";
    	flag = 1;
    }

    if (flag == 1)
    	str = "where " + str; 

    xmlhttp.open("GET","display_committee.php?q="+str,true);
    xmlhttp.send();
    
};
