function go()
{
	var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) {
            
            if (this.responseText == "")
               	window.alert ("Invalid Consultant ID");
            else
            {
            	document.getElementById("det").innerHTML = this.responseText;
            	document.getElementById("upload").disabled = false;
            	document.getElementById("download").disabled = false;
            	document.getElementById("userfile").disabled = false;
            }

        }
    };
	
	var cnslt_id = document.getElementById('cnslt_id').value;
	xmlhttp.open("GET","go.php?q="+cnslt_id,true);
    xmlhttp.send();  
};