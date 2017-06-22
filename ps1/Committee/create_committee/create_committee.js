//<script type = "text/javascript">

function header_data (num)
{
	if (num == 1)
	{
		document.getElementById('recon').style.display = 'none';
		document.getElementById('sub').style.display = 'none';
	}
	else if (num == 2)
	{
		document.getElementById('recon').style.display = 'block';
		document.getElementById('sub').style.display = 'none';

	}
	else if (num == 3)
	{
		document.getElementById('recon').style.display = 'none';
		document.getElementById('sub').style.display = 'block';
	}
}