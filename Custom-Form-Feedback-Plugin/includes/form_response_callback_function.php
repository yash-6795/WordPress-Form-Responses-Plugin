<?php
function form_response_callback_function()
{
echo "<table class='table table-striped' style=width:100% >
<tr>
<td style='text-align:left;width:10%'><b>Cname</b></td>
<td style='text-align:left;width:5%'><b>Cage</b></td>
<td style='text-align:left;width:5%'><b>Cclass</b></td>
<td style='text-align:left;width:10%'><b>Caddress</b></td>
<td style='text-align:left;width:10%'><b>Pname</b></td>
<td style='text-align:left;width:10%'><b>Ptnumber</b></td>
<td style='text-align:left;width:10%'><b>Pmnumber</b></td>
<td style='text-align:left;width:10%'><b>Pemail</b></td>
<td style='text-align:left;width:15%'><b>Cmedical</b></td>
<td style='text-align:left;width:10%'><b>timings</b></td>
<td style='text-align:left;width:5%'><b>timings</b></td>
</tr>
</table>";
$conn=mysql_connect("<DB-HOST>","<DB-Username>","<DB-Password>");
if($conn)
{
	mysql_select_db("<DB-Name>",$conn);
$sql="select * from form_data";
$query=mysql_query($sql);
if(!$query)
echo mysql_error();
else
{
	while($row=mysql_fetch_array($query))
	{
		echo "<table class='table table-striped' style=width:100% >
<tr>
<td style='text-align:left;width:10%'><b>$row[0]</b></td>
<td style='text-align:left;width:5%'><b>$row[2]</b></td>
<td style='text-align:left;width:5%'><b>$row[3]</b></td>
<td style='text-align:left;width:10%'><b>$row[1]</b></td>
<td style='text-align:left;width:10%'><b>$row[8]</b></td>
<td style='text-align:left;width:10%'><b>$row[6]</b></td>
<td style='text-align:left;width:10%'><b>$row[7]</b></td>
<td style='text-align:left;width:10%'><b>$row[5]</b></td>
<td style='text-align:left;width:15%'><b>$row[4]</b></td>
<td style='text-align:left;width:10%'><b>$row[9]</b></td>
<td style='text-align:left;width:5%'><b>$row[10]</b></td>
</tr>
</table>";
	}
}
}
else echo mysql_error();
}
?>
