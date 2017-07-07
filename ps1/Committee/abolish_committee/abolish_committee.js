function go(coord_id)
{
	var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) {
            
            if (this.responseText == "")
               	window.alert ("Invalid Committee ID");
            else
            {
            	document.getElementById("table").innerHTML = this.responseText;
            	enable_button(coord_id);
            }
        }
    };
	
	var com_id = document.getElementById('com_id').value;

    if (com_id == "")
    {
        alert("Enter Committee ID");
        return;   
    }
	xmlhttp.open("GET","info.php?q="+com_id,true);
    xmlhttp.send();  
};

function enable_button(coord_id)
{
    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) {
            
            if (coord_id == this.responseText)
            document.getElementById("abolish").disabled = false;
        }
    };
    
    var com_id = document.getElementById('com_id').value;
    xmlhttp.open("GET","enable.php?q="+com_id,true);
    xmlhttp.send();  
};

function abolish()
{
    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200)
            alert(this.responseText);
    };
    
    var com_id = document.getElementById('com_id').value;
    xmlhttp.open("GET","abolish.php?q="+com_id,true);
    xmlhttp.send();
};