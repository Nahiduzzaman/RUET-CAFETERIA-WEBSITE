<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

/*// Create database
if (mysql_query("CREATE DATABASE nokia",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }
*/
// Create table
mysql_select_db("nokia", $con);
$sql = "CREATE TABLE tblcontact
(
Name varchar(50),
Email text,
Comments text
)";

// Execute query
mysql_query($sql,$con);

mysql_close($con);
?>