<?php session_start();ob_start("ob_gzhandler");?>
<?php include "base.php"; ?>
<!doctype html>
<meta charset="utf-8">

<html> 
 <head> 
    <title> RUET CAFETERIA </title> 
	<link  rel="stylesheet" href="styles/register.css"/>
	<link  rel="stylesheet" href="styles/cafeteria.css"/>
   </head>
   <body>
   
    
 <img src ="images/cafeout2.jpg" alt="cafeteria picture" width=100% height=18%>
  
  
  <div id="award">
      <img src="images/award.gif"
           alt="Roaster of the Year award" />
    </div>
	
	<div id="awardd">
      <img src="images/awardd.gif"
           alt="Roaster of the Year award" />
    </div>
    
	

		<div id="menu2">
	     <a href="../index.php"> HOME</a>
		  <a href="about.php"> ABOUT</a>
		  <a href="contact.php"> CONTACT</a>
	      <a href="service.php" > SERVICES </a >
		</div>
		
<div id="register">
<?php
if(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    $email = mysql_real_escape_string($_POST['email']);
    
	 $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");
     
     if(mysql_num_rows($checkusername) == 1)
     {
     	echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and <a href=\"javascript:history.go(-1)\">try again</a>.</p>";
     }
     else
     {
     	$registerquery = mysql_query("INSERT INTO users (Username, Password, EmailAddress) VALUES('".$username."', '".$password."', '".$email."')");
        if($registerquery)
        {
        	echo "<h1>Success</h1>";
        	//echo "<p>Your account was successfully created. Please <a href=\"cafelogin.php\">click here to login</a>.</p>";
        	echo "<p>Your account was successfully created. Please <a href=\"javascript:history.go(-2)\">Go Back and Login</a>.</p>";
        }
        else
        {
     		echo "<h1>Error</h1>";
        	echo '<a href="javascript:history.go(-1)">try again.</a>';    
        }    	
     }
}
else
{
	?>
    
   <h1 align="center">Register</h1>
    
   <p align="center">Please enter your details below to register.</p>
    
	<form method="post" action="register.php" name="registerform" id="registerform">
	<fieldset>
		<label for="username">Username:</label><input type="text" name="username" style="width:260px;" id="username" /><br><br>
		<label for="password">Password:</label><input type="password" name="password"  style="width:260px;" id="password" /><br><br>
        <label for="email">Email Address:</label><input type="text" name="email" style="width:260px;" id="email" /><br><br>
		<input type="submit" name="register" id="reg" value="Register" class="button" />
	</fieldset>
	</form>
    
    <?php
}
?>

</div>
</body>
</html>
