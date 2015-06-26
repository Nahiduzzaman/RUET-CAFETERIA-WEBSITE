<?php include "base.php"; ?>


<!doctype html>
<meta charset="utf-8">


 <html>
 <head>
 <link  rel="stylesheet" href="styles/cafeteria.css"/>
 <link rel="stylesheet" href="styles/stylelogin2.css">
 <script src="jquery-1.10.1.js"></script>
 <script src="signin.js"></script>
 </head>
 <body>
 <div class="box">  	
	<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
	 ?>
	 <p> <small><?php echo "$_SESSION[Username]"?>&nbsplogged in</small></p>
	 
		<?php
		}
		
		else
		{
		?>
		<p>LOG IN</p>
		<?php
		}
		?>
		
	</div>
	
	<div class="loginbox">	


		
	<!--div style="clear:both"></div-->



<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
	 ?>

	 
     <p>Thanks for logging in! You are <b><?php echo "$_SESSION[Username]"?></b> and your email address is <b><?php echo "$_SESSION[EmailAddress]"?></b>.</p>
     <form method="post" action="logout.php" name="loginform" id="loginform">
	 <input type="submit" name="login" id="login" value="Logout" />
     </form>

           <?php
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    
	$checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");
    
    if(mysql_num_rows($checklogin) == 1)
    {
    	$row = mysql_fetch_array($checklogin);
        $email = $row['EmailAddress'];
        
        $_SESSION['Username'] = $username;
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
		
		//if(isset($_SERVER['HTTP_REFERER'])) {
     
        
      
        
    	//echo "<h1>Success</h1>";
        //echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;contact.php' />";
    }
    else
    {
    	//echo "<p>Sorry, your account could not be found. Please <a href=\"../../index.php\">click here to try again</a>.</p>";
		echo ('<script type="text/javascript">alert ("ERROR USERNAME OR PASSWORD");</script>');
		//echo "<meta http-equiv='refresh' content='=2;../../index.php' />";
        
	}
	
}
else
{
	?>
 
   <p>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</p>
	<form method="post" action="contact.php" name="loginform" id="loginform" class="loginbo" onsubmit ="return validateForm()" >
	
		<label for="username"><b>Username:</b></label><input type="text" name="username" id="username" /><br /><br>
		<label for="password"><b>Password:</b>&nbsp</label><input type="password" name="password" id="password" /><br />
		<input type="submit" name="login" id="login" value="Login"  onclick="return"/>
	
	</form>
    
   <?php
}
?>

</div>	
</body>
</html>