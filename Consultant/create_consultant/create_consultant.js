function add_row (tableid, a, b)
{
	var table = document.getElementById(tableid);
	var rowno = document.getElementById(tableid).rows.length;
	var row = table.insertRow(rowno);
	--rowno;
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var t1 = document.createElement("input");
	t1.type = "text";
	t1.name = a + '[' + rowno + ']';
	t1.id = "cell";
	cell1.appendChild(t1);
	var t2 = document.createElement("input");
	t2.type = "text";
	t2.name = b + '[' + rowno + ']';
	t2.id = "cell";
	cell2.appendChild(t2);
}

function del_row (tableid)
{
	var rowno = document.getElementById(tableid).rows.length;
	if (rowno == 2)
		return;
	document.getElementById(tableid).deleteRow(rowno-1);
}