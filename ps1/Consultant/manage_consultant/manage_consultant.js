function cnslt_details(curr_coord)
{
    var cnslt_id = document.getElementById("cnslt_id").value;

	if (cnslt_id == "") {
        document.getElementById("coord").value = "";
        document.getElementById("con_type").value = "";
        document.getElementById("con_stat").value = "";
        document.getElementById("payment").value = "Undefined";
        return;
    }

    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            var data = JSON.parse(xmlhttp.responseText);
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

    xmlhttp.open("GET","get_consultant.php?q="+cnslt_id,true);
    xmlhttp.send();
};