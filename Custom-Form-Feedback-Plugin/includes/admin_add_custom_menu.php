<?php
function form_custom_menu()
{
	add_menu_page(
		'Form Response',//page title
		'Form Responses',//menu title
		'manage_options',//capability of user to show this munu
		__FILE__,//slug for menu -  should be unique
		'form_response_callback_function'// callback function which will output the content on page

	);
	add_submenu_page(__FILE__,'<>','<>','manage_options',__FILE__.'menu1','callbackSubMenu1');
	add_submenu_page(__FILE__,'<>','<>','manage_options',__FILE__.'menu2','callbackSubMenu2');
	add_submenu_page(__FILE__,'<>','<>','manage_options',__FILE__.'menu3','callbackSubMenu3');
	add_submenu_page(__FILE__,'<>','<>','manage_options',__FILE__.'menu4','callbackSubMenu4');
}
function callbackSubMenu1()
{
	echo "<table class='table table-striped' style=width:100% >
<tr>
<td style='text-align:left;width:5%'><b>Id</b></td>
<td style='text-align:left;width:5%'><b>Cname</b></td>
<td style='text-align:left;width:5%'><b>Cage</b></td>
<td style='text-align:left;width:5%'><b>Caddress</b></td>
<td style='text-align:left;width:5%'><b>School</b></td>
<td style='text-align:left;width:5%'><b>Pname</b></td>
<td style='text-align:left;width:5%'><b>Ptnumber</b></td>
<td style='text-align:left;width:5%'><b>Pmnumber</b></td>
<td style='text-align:left;width:10%'><b>Pemail</b></td>
<td style='text-align:left;width:10%'><b>Econtact</b></td>
<td style='text-align:left;width:15%'><b>Cmedical</b></td>
<td style='text-align:left;width:15%'><b>camps</b></td>
<td style='text-align:left;width:5%'><b>location</b></td>
<td style='text-align:left;width:5%'><b>week</b></td>
</tr>
</table>";
	$conn=mysql_connect("<DB-HOST>","<DB-Username>","<DB-Password>");
	if($conn)
	{
		mysql_select_db("<DB-Name>",$conn);
		$sql="select * from <DB-Table>";
		$query=mysql_query($sql);
		if(!$query)
			echo mysql_error();
		else
		{
			while($row=mysql_fetch_array($query))
			{
				echo "<table class='table table-striped' style=width:100% >
<tr>
<td style='text-align:left;width:5%'><b>$row[0]</b></td>
<td style='text-align:left;width:5%'><b>$row[1]</b></td>
<td style='text-align:left;width:5%'><b>$row[2]</b></td>
<td style='text-align:left;width:5%'><b>$row[3]</b></td>
<td style='text-align:left;width:5%'><b>$row[4]</b></td>
<td style='text-align:left;width:5%'><b>$row[13]</b></td>
<td style='text-align:left;width:5%'><b>$row[6]</b></td>
<td style='text-align:left;width:5%'><b>$row[7]</b></td>
<td style='text-align:left;width:10%'><b>$row[5]</b></td>
<td style='text-align:left;width:10%'><b>$row[8]</b></td>
<td style='text-align:left;width:15%'><b>$row[12]</b></td>
<td style='text-align:left;width:15%'><b>$row[10]</b></td>
<td style='text-align:left;width:5%'><b>$row[11]</b></td>
<td style='text-align:left;width:5%'><b>$row[9]</b></td>
</tr>
</table>";
			}
		}
	}
	else echo mysql_error();
}
function callbackSubMenu2()
{
	echo "<table class='table table-striped' style=width:100% >
<tr>
<td style='text-align:left;width:5%'><b>Id</b></td>
<td style='text-align:left;width:15%'><b>Courses</b></td>
<td style='text-align:left;width:8%'><b>Cname</b></td>
<td style='text-align:left;width:8%'><b>Caddress</b></td>
<td style='text-align:left;width:8%'><b>Gender</b></td>
<td style='text-align:left;width:8%'><b>dob</b></td>
<td style='text-align:left;width:8%'><b>School</b></td>
<td style='text-align:left;width:8%'><b>Class</b></td>
<td style='text-align:left;width:8%'><b>Pmnumber</b></td>
<td style='text-align:left;width:8%'><b>Pemail</b></td>
<td style='text-align:left;width:8%'><b>Cmedical</b></td>
<td style='text-align:left;width:8%'><b>Pname</b></td>
</tr>
</table>";
	$conn=mysql_connect("<DB-HOST>","<DB-Username>","<DB-Password>");
	if($conn)
	{
		mysql_select_db("<DB-Name>",$conn);
		$sql="select * from <DB-Table>";
		$query=mysql_query($sql);
		if(!$query)
			echo mysql_error();
		else
		{
			while($row=mysql_fetch_array($query))
			{
				echo "<table class='table table-striped' style=width:100% >
<tr>
<td style='text-align:left;width:5%'><b>$row[0]</b></td>
<td style='text-align:left;width:15%'><b>$row[1]</b></td>
<td style='text-align:left;width:8%'><b>$row[2]</b></td>
<td style='text-align:left;width:8%'><b>$row[3]</b></td>
<td style='text-align:left;width:8%'><b>$row[4]</b></td>
<td style='text-align:left;width:8%'><b>$row[5]</b></td>
<td style='text-align:left;width:8%'><b>$row[6]</b></td>
<td style='text-align:left;width:8%'><b>$row[7]</b></td>
<td style='text-align:left;width:8%'><b>$row[8]</b></td>
<td style='text-align:left;width:8%'><b>$row[9]</b></td>
<td style='text-align:left;width:8%'><b>$row[10]</b></td>
<td style='text-align:left;width:8%'><b>$row[11]</b></td>
</tr>
</table>";
			}
		}
	}
	else echo mysql_error();
}
function callbackSubMenu3()
{
	echo "<table class='table table-striped' style=width:100% >
<tr>
<td style='text-align:left;width:5%'><b>Id</b></td>
<td style='text-align:left;width:15%'><b>Courses</b></td>
<td style='text-align:left;width:8%'><b>Cname</b></td>
<td style='text-align:left;width:8%'><b>Caddress</b></td>
<td style='text-align:left;width:8%'><b>Gender</b></td>
<td style='text-align:left;width:8%'><b>dob</b></td>
<td style='text-align:left;width:8%'><b>School</b></td>
<td style='text-align:left;width:8%'><b>Class</b></td>
<td style='text-align:left;width:8%'><b>Pmnumber</b></td>
<td style='text-align:left;width:8%'><b>Pemail</b></td>
<td style='text-align:left;width:8%'><b>Cmedical</b></td>
<td style='text-align:left;width:8%'><b>Pname</b></td>
</tr>
</table>";
	$conn=mysql_connect("<DB-HOST>","<DB-Username>","<DB-Password>");
	if($conn)
	{
		mysql_select_db("<DB-Name>",$conn);
		$sql="select * from <DB-Table>";
		$query=mysql_query($sql);
		if(!$query)
			echo mysql_error();
		else
		{
			while($row=mysql_fetch_array($query))
			{
				echo "<table class='table table-striped' style=width:100% >
<tr>
<td style='text-align:left;width:5%'><b>$row[0]</b></td>
<td style='text-align:left;width:15%'><b>$row[1]</b></td>
<td style='text-align:left;width:8%'><b>$row[2]</b></td>
<td style='text-align:left;width:8%'><b>$row[3]</b></td>
<td style='text-align:left;width:8%'><b>$row[4]</b></td>
<td style='text-align:left;width:8%'><b>$row[5]</b></td>
<td style='text-align:left;width:8%'><b>$row[6]</b></td>
<td style='text-align:left;width:8%'><b>$row[7]</b></td>
<td style='text-align:left;width:8%'><b>$row[8]</b></td>
<td style='text-align:left;width:8%'><b>$row[9]</b></td>
<td style='text-align:left;width:8%'><b>$row[10]</b></td>
<td style='text-align:left;width:8%'><b>$row[11]</b></td>
</tr>
</table>";
			}
		}
	}
	else echo mysql_error();
}
function callbackSubMenu4()
{
	echo "<table class='table table-striped' style=width:100% >
<tr>
<td style='text-align:left;width:5%'><b>Id</b></td>
<td style='text-align:left;width:5%'><b>Cname</b></td>
<td style='text-align:left;width:5%'><b>Cage</b></td>
<td style='text-align:left;width:5%'><b>Caddress</b></td>
<td style='text-align:left;width:5%'><b>School</b></td>
<td style='text-align:left;width:5%'><b>Pname</b></td>
<td style='text-align:left;width:5%'><b>Ptnumber</b></td>
<td style='text-align:left;width:5%'><b>Pmnumber</b></td>
<td style='text-align:left;width:10%'><b>Pemail</b></td>
<td style='text-align:left;width:10%'><b>Econtact</b></td>
<td style='text-align:left;width:15%'><b>Cmedical</b></td>
<td style='text-align:left;width:15%'><b>camps</b></td>
<td style='text-align:left;width:10%'><b>Permission</b></td>

</tr>
</table>";
	$conn=mysql_connect("<DB-HOST>","<DB-Username>","<DB-Password>");
	if($conn)
	{
		mysql_select_db("<DB-Name>",$conn);
		$sql="select * from <DB-Table>";
		$query=mysql_query($sql);
		if(!$query)
			echo mysql_error();
		else
		{
			while($row=mysql_fetch_array($query))
			{
				echo "<table class='table table-striped' style=width:100% >
<tr>
<td style='text-align:left;width:5%'><b>$row[0]</b></td>
<td style='text-align:left;width:5%'><b>$row[1]</b></td>
<td style='text-align:left;width:5%'><b>$row[2]</b></td>
<td style='text-align:left;width:5%'><b>$row[3]</b></td>
<td style='text-align:left;width:5%'><b>$row[4]</b></td>
<td style='text-align:left;width:5%'><b>$row[11]</b></td>
<td style='text-align:left;width:5%'><b>$row[6]</b></td>
<td style='text-align:left;width:5%'><b>$row[7]</b></td>
<td style='text-align:left;width:10%'><b>$row[5]</b></td>
<td style='text-align:left;width:10%'><b>$row[8]</b></td>
<td style='text-align:left;width:15%'><b>$row[10]</b></td>
<td style='text-align:left;width:15%'><b>$row[9]</b></td>
<td style='text-align:left;width:10%'><b>$row[12]</b></td>
</tr>
</table>";
			}
		}
	}
	else echo mysql_error();
}

?>
