<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("nokia", $con);
@$b=$_POST['sex2'];
if(@$_POST['submit'])
{
 $s="insert into tblcust3(sex2) values('$b')";
echo "Your Data Inserted";
mysql_query($s);
}
?>
<html>
<body bgcolor="pink">
<center>
<form method="post">
<table border="1" bgcolor="#00CCFF">
<tr><td rowspan="2">sex2</td>
<td><input type="radio" name="sex2" value="Male"/>Male</td>
<tr>
<td><input type="radio" name="sex2" value="Female"/>Female</td></tr>
</tr>
<tr><td><input type="submit" name="submit" value="Submit"/></td></tr>
</table>
</form>
</center>
</body>
</html>