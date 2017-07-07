function go()
{
    var com_id = document.getElementsByName('com_id')[0].value;
    if (com_id == "")
    {
        alert("Enter Committee ID!");
        return;
    }

	var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) {
            
            if (this.responseText == "")
               	window.alert ("Invalid Committee ID");
            else
            {
            	document.getElementById("det").innerHTML = this.responseText;
            	document.getElementById("upload").disabled = false;
            	document.getElementById("download").disabled = false;
            	document.getElementById("userfile").disabled = false;
            }

        }
    };
	
	xmlhttp.open("GET","go.php?q="+com_id,true);
    xmlhttp.send();  
};