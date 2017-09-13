function due_or_no()
{	
	var obj=document.getElementById('due_or_no');
	var index = obj.selectedIndex;
	var value = obj.options[index].value; // 选中文本
	if(value=='已经到期')
	{
		document.getElementById('due_table').style.visibility='visible';
		document.getElementById('due_no_table').style.visibility='hidden';
	}
	if(value=='未到期')
	{
		document.getElementById('due_table').style.visibility='hidden';
		document.getElementById('due_no_table').style.visibility='visible';
	}
}
function show_no_renew()
{
	document.getElementById('due_table').style.visibility='hidden';
	document.getElementById('due_no_table').style.visibility='visible';	
}
