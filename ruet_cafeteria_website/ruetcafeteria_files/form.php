<?php session_start();?>
<?php include "base.php"; ?> 

<!doctype html>
<meta charset="utf-8">

<html>
<head>  

<title>Customer's Order</title>
<link  rel="stylesheet" href="styles/cafeteria.css"/>
<link rel="stylesheet"  href="styles/form.css"/>
	<script src="myForm.js"></script>

	
	
</head>  
<body>  
<div id="main">




<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
	 ?>

	 <h1 align="center"> Welcome to our Kitchen&nbsp"<b><?php echo "$_SESSION[Username]"?></b>"!!! </h1>
	 <p align="center"><b>Fill the form below and give your order.</b></p> <a  href="../index.php"> <img  align="right" src="images/home.png" title="Back To Home" style="margin-right:50px" width=50px height=50px></a><br><br>
     <!--form method="post" action="logout.php" name="loginform" id="loginform">
	 <!--input type="submit" name="login" id="login" value="Logout" />
     </form-->
	  

        <form name="myForm" action="insert.php" onsubmit ="return validateForm()" method="post">
      <table>
	  
	  <tr>
			<th>Choose&nbspyour&nbspFood:</th>
          <td>			
			<select name="foods" id="foods" style="width:500px">
            <option value="">Select One</option>
            <option value = "Breakfast">Breakfast</option>
            <option value = "Lunch">Lunch</option>
            <option value = "TeaTime">TeaTime</option>
            <option value = "Supper">Supper</option>
			 <option value = "WeeklySpecials">Weekly Specials</option>
			</td>
			   </select>
	
	</tr>
	
	<tr>
			<th>Choose&nbspyour&nbspHall/Location:</th>
          <td>			
			<select name="hall" id="hall" style="width:500px">
            <option value="">Select One</option>
            <option value = "selim">Shahid Lt. Selim Hall</option>
            <option value = "zia">Shahid President Ziaur Rahman Hall</option>
            <option value = "shahidul">Shahid Shahidul Islam Hall</option>
            <option value = "hamid">Shahid Abdul Hamid Hall</option>
            <option value = "hasina">Sheik Hasina Hall</option>
            <option value = "tinshed">Tinshed Hall</option>
			  <option value = "others">Others</option>
			</td>
			   </select>
	
	</tr>
	
		<tr>
			<th rowspan="2">Extras:</th>
			<td><input type="radio" name="extras" value="giftwrap"/>Gift&nbspWrap</td>
			<tr>
			<td><input type="radio" name="extras" value="catalog"/>Include&nbspCatalog&nbspwith&nbspOrder </td></tr>
			</tr>
			
			

	  
	     <tr>
          <th>Send to:</th>
		  
            <td>
			<br>
              <table>
			  
			  <tr>
                <tr>
                  <td>Name:</td>
                  <td>
                    <input type="text" name="name" id="name" onClick="blankDefault('Enter Your Name', this)" style="width:245px" value="" />
                  </td>
                </tr>
				
				<tr>
                  <td>Address(If Outside of RUET):</td>
                  <td>
                    <textarea name="Address" onfocus="this.value=''; return false;" title="Please write your full address here" id="Address" rows="10" cols="28">
Dear Outside Customers,
Please write here your full address where you want to accept your order...</textarea>
                  </td>
                </tr>
				
				
				<tr>
                  <td>Product&nbspId:</td>
                  <td>
                    <input type="text" onfocus="this.value=''; return false;" style="width:245px" name="ProductID" id="ProductID"  maxlength="6"  title="You can find the Product Id by hovering the cursor over foods name,You can order maximum 3 products!!" value="Example: B1,L1,W3 etc." />
                                                 
					   
				  </td>
                </tr>
				
                <tr>
                  <td>E-mail:</td>
                  <td>
                    <input type="text" name="Email" id="Email" style="width:245px" value="" />
                  </td>
                </tr>
				
                <tr>
                  <td>Room No:</td>
                  <td>
                    <input type="text" name="roomno" id="roomno" style="width:245px" value="" />
                  </td>
                </tr>
				
				<tr>
                  <td>Mobile:</td>
                  <td>
                    <input type="text" name="mobile" id="mobile" style="width:245px" value="" />
                  </td>
                </tr>
				
              </table>
            </td>
	  </tr>

                

	  
		
			
			
			


          <!--tr>
            <th>Comments:</th>
            <td>
              <textarea name="comments" id="comments" rows="10" cols="48"></textarea>
            </td>
          </tr-->
		  
		  
		  
		  <th><h2> Payment: </h2></th>
		  <td><br><br><br><b>We accept payment via <em>"bKash"</em>.Please fill required sectors below to confirm your order :-</b><br><br>
                  <b><big>Our account no:</big></b> <big><big><big>01840053231</big></big></big>. <br><br>		  
                  Mobile_No (Which you used to pay):<br>
                    <input type="text" name="bmobile" id="bmobile"  style="width:300px;" value="" /><br><br>
                  bKash Transaction ID (TrxID):<br>
                    <input type="text" name="trxID" id="trxID" style="width:300px;" value="" /><br><br>
					 Paid Amount(BDT):<br>
					    <input type="text" name="bill" id="bill" style="width:300px;" value="" /><br><br>
					 Number of Products:<br>
					    <input type="text" name="nop" id="nop" style="width:300px;" value="" /><br>
					    
                 <img align="right" src="images/index.jpg" title="Bkash" width=100px height=64px>
				  
				  </td>
				  
				  
            

          <tr>
	    <th></th>
            <td>
              <input type="submit" value="Confirm Order"  class="fbutton" onclick= "return validateForm()"  />
            </td>
          </tr>
		  
		  
        </table>
		
		
		
      </form>

	  
	  
	  <div id="bkash">
<h1>Don't know How to pay via <em>bKash</em>? See the video below </h1>

<embed src="bkash.swf" width="820" height="480">

</div>


 <a  href="../index.php"> <img align="right" src="images/home.png" title="Back To Home" width=50px height=50px></a><br><br>

<div id="footer">
      &copy; 2013, RUET CAFETERIA
      <br />
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
    </div>

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
        
    	echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;form.php' />";
    }
    else
    {
    	echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"form.php\">click here to try again</a>.</p>";
    }
}
else
{
	?>
	
	<div id="cafelogin">
    
   <h1>You have to be logged in to Give Your Order!</h1>
    
   <p>Please either login below, or <a href="register.php">click here to register</a>.</p>
    
	<form method="post" action="form.php" name="loginform" id="loginform">
	<fieldset>
		<label for="username">Username:</label><input type="text" name="username" id="username" /><br><br>
		<label for="password">Password:&nbsp</label><input type="password" name="password" id="password" /><br><br>
		<input type="submit" name="login" id="login" value="Login"  class="button" onclick="parent.location='form.html'"/>
	</fieldset>
	
	</form>
	<br>
	<a href="javascript:history.go(-1)">Go Back</a>
	</div>
    
   <?php
}
?>

</div>



</body>
</html>
