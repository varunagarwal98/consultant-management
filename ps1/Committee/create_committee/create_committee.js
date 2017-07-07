//<script type = "text/javascript">
function header_data (num)
{
	if (num == 1)
	{
		document.getElementById('2').style.display = 'none';
		document.getElementById('1').style.display = 'none';
    document.getElementsByName('ref_com_id')[0].required = true;
    document.getElementsByName('reconst_type')[0].required = true;
    document.getElementsByName('par_id')[0].required = false;
	}
	else if (num == 2)
	{
		document.getElementById('1').style.display = 'block';
		document.getElementById('2').style.display = 'none';
    document.getElementsByName('ref_com_id')[0].required = false;
    document.getElementsByName('reconst_type')[0].required = false;
    document.getElementsByName('par_id')[0].required = true;
  }
	else if (num == 3)
	{
		document.getElementById('1').style.display = 'none';
		document.getElementById('2').style.display = 'block';
    document.getElementsByName('ref_com_id')[0].required = false;
    document.getElementsByName('reconst_type')[0].required = false;
    document.getElementsByName('par_id')[0].required = false;
	}
};

function details_data (num)
{
    document.getElementById('selectionOfMembers').hidden = true;
    document.getElementById('backgroundData').hidden = true;
    document.getElementById('termsOfReference').hidden = true;
    document.getElementById('DistributionList').hidden = true;

    switch (num)
    {
      case 1: document.getElementById('selectionOfMembers').hidden = false;
              break;

      case 2: document.getElementById('backgroundData').hidden = false;
              break;

      case 3: document.getElementById('termsOfReference').hidden = false;
              break;

      case 4: document.getElementById('DistributionList').hidden = false;
              break;
    }
};

function get_com_details()
{
  var com_id = document.getElementsByName("ref_com_id")[0].value;
  
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
                  document.getElementsByName('com_type')[0].value = data['com_type']
                  document.getElementsByName('com_cat')[0].value = data['com_category'];
                  document.getElementsByName('com_name')[0].value = data['com_name'];
                  document.getElementsByName('com_abr')[0].value = data['com_abb'];
                  document.getElementsByName('order_no')[0].value = data['com_ord_no'];
                  document.getElementsByName('order_date')[0].value = data['com_order_date'];
                  document.getElementsByName('valid_from')[0].value = data['valid_from'];
                  document.getElementsByName('valid_to')[0].value = data['valid_to'];
                  document.getElementsByName('com_spoc')[0].value = data['com_spoc'];
                  document.getElementsByName('app_auth')[0].value = data['com_app_auth'];
                  document.getElementsByName('back_data')[0].value = data['back_data'];
                  document.getElementsByName('terms_ref')[0].value = data['term_ref'];
                  get_members(com_id);
              }
          };

          xmlhttp2.open("GET","../modify_committee/get_committee.php?q="+com_id,true);
          xmlhttp2.send();
        }
      }
    };

    xmlhttp.open("GET","../modify_committee/check_committee.php?q="+com_id,true);
    xmlhttp.send(); 
};