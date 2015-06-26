<?php session_start() ?>
<!doctype html>
<meta charset="utf-8">
<html>
  <head>
    <title>Contact Us</title>
	<link  rel="stylesheet" href="styles/cafeteria.css"/>
	<link rel="stylesheet"  href="styles/contact.css">
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
	   	   <a href="../index.php">HOME</a>
		  <a href="about.php"> ABOUT</a>
		  CONTACT
	      <a href="service.php">SERVICES</a> 
		</div>
		
		<div id="main">
		<?php include "newlogin3.php"; ?>
		<br>
		<h1> Contact Us </h1>
		
		<form name="myForm" action="contactinsert.php" onsubmit ="return validateForm()"method="post">
		<hr height="2px" color="#310906">
		
		<h2>Our Location</h2>
		
		<div style="float:left">
		<b><h4>Address</h4></b>
		<small>
		Rajshahi University of Engineering & Technology<br>
		Dhaka-Natore Road<br>
		Talaimari,Rajshahi<br></small>
		</div>
		
		<div style="float:right;width:390px;">
		<b><h4>Telephone/Mobile/E-mail</h4></b>
		
		<small><b>Ph:</b>(0721)75042-3,751320-1,<br><b>Mobile:</b>(+880)1736675869-71<br><b>E-mail:</b>ruet.cafeteria@ruetbd.org</small>
		<br>
		
		</div>
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<div>
		
		<h2> <a id="cform">Contact Form</a></h2><br>
		
				
					<b>First Name:</b><br>
					
                    <input type="text" name="name" id="name" style="width:300px;" value="" />
					<br>
					<br>
					
				  
					<b>E-mail:</b><br>
					
						<input type="text" name="Email" id="Email" style="width:300px;" value="" />
					<br>
					<br>
					
					<b>Your Message:</b><br>
					
					<textarea name="comments" id="comments" rows="10" cols="68"></textarea>
					<br>
					<br>
					<input type="submit" value="Send" class="cbutton"  />
				
				  
				  </div>
		</form>
		
		
		<br>
		
		
	
		 <a  href="../index.php"> <img align="right" src="images/home.png" style="margin-right:15px" title="Back To Home" width=50px height=50px></a><br><br><br>
		
		</div >
		
		
		
		
		
		
		   <div id="footer">
      &copy; <?php echo date ("Y") ?>, RUET CAFETERIA
      <br />
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
    </div>
		
		</body>
</html>