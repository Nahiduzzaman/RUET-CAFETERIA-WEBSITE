<?php session_start();ob_start("ob_gzhandler");?>
<!--?php include "ruetcafeteria_files/base.php"; ?--> 
<!doctype html>
<meta charset="utf-8">

<html> 
 <head> 
    <title>Cafeteria Home </title> 
	<link  rel="stylesheet" href="ruetcafeteria_files/styles/cafeteria.css"/>
	<link rel="stylesheet" href="ruetcafeteria_files/styles/stylelogin.css">
	<script src="ruetcafeteria_files/jquery-1.10.1.js"></script>
	<script src="ruetcafeteria_files/signin.js"></script>
	
   </head>
   <body>
   
    
 <img src ="ruetcafeteria_files/images/cafeout2.jpg" alt="cafeteria picture" width=100% height=18%>
  
  
  <div id="award">
      <img src="ruetcafeteria_files/images/award.gif"
           alt="Ruet cafe" />
    </div>
	
	<div id="awardd">
      <img src="ruetcafeteria_files/images/awardd.gif"
           alt="Ruet cafe" />
    </div>
    
	     
		

		<div id="menu">
	   	   HOME
		  <a href="ruetcafeteria_files/about.php"> ABOUT</a>
		  <a href="ruetcafeteria_files/contact.php"> CONTACT</a>
	      <a href="ruetcafeteria_files/service.php" > SERVICES </a >

		  <?php include "ruetcafeteria_files/newlogin.php"; ?>

		  </div>
  
  
	
		
		<div id="cscroll">
		<marquee  behavior="scroll"  scrollamount="3" direction="left">
		Today is <?php echo date ("Y/m/d") ?> Enjoy Our foods! Follow us in Social Network sites. Leave Your reviews in SERVICES section. Be with us. Our
		Cafeteria is OPEN 24/7 for your service.Order Online Enjoy with your friends.
		</marquee>
		</div>
		
		
		
		
    	<div id="head">
		
		
		<h1 align="center"> Welcome! <?php echo $_SESSION[Username]?> to RUET CAFETERIA</h1>
	
		
      <p> Ruet cafeteria is food corner of all respective ruet students and teachers. Here you can find your favourite foods from menu.
	  Check our daily upadated menu. Keep up to date with everyday meals and many more
	  Stay a bit longer and enjoy the multicultural culinary menu that 
      combines a harmony of taste, texture, and color with the best in fresh
      and healthy ingredients. </p>  
    </div>
	
	<div id="food" class="box-shadow">
	
	<center>	<a href="#Breakfast"> Breakfast </a>|<a href="#Lunch">Lunch </a>|<a href="#Tea-Time"> Tea-Time </a>| <a href="#Supper"> Supper </a>
	</center>

	<h1 align="center"> <a id="Breakfast"> <u> Breakfast </u> <a> </h1>
	<div style="float:left;  width:1%;">
   <ul> 
   <li title= "Product ID: B1">B1.&nbspCheese&nbspBurger</li>  
   <li title= "Product ID: B2">B2.&nbspKhichuri</li>
   <li title= "Product ID: B3">B3.&nbspFried&nbspEggs</li>  
   <li title= "Product ID: B4">B4.&nbspCoffee</li>  
   <li title= "Product ID: B5">B5.&nbspParatha</li>    
   <li title= "Product ID: B6">B6.&nbspTea</li> 
   </ul>
   </div>
   <div style="float:right;  width:190px;">
   <ul>
    <li>25/-per piece</li >
	<li> 10/-per plate</li> 
	 <li>10/-per piece</li>
	 <li>10/-per cup&nbsp&nbsp </li>
	 <li>05/-per piece</li> 
	 <li>05/-per cup&nbsp&nbsp </li> 
   </ul>
   </div>
   </div>
   <!--lunch--->
   <div id="lunch" class="box-shadow">
   <h1> <a id="Lunch"> <u> Lunch </u> <a></h1>
   <div style="float:left;  width:1%;">
   <ul> 
   <li title= "Product ID: L1">  L1.&nbspRice </li >  
   <li title= "Product ID: L2">  L2.&nbspKhichuri</li >  
   <li title= "Product ID: L3">  L3.&nbspFried&nbspEggs</li > 
   <li title= "Product ID: L4">  L4.&nbspBeef</li >  
   <li title= "Product ID: L5">  L5.&nbspMutton</li >   
   <li title= "Product ID: L6">  L6.&nbspChicken </li > 
   </ul>
   </div>
   <div style="float:right;  width:190px;">
    <ul>
	<li>10/- per plate</li >
	<li>10/- per plate</li>
	<li>10/- per piece</li> 
	<li>35/- per plate</li>
	<li>45/- per plate </li>
	<li>10/- per plate </li>
	</ul>
</div>
</div>

<div id="tea" class="box-shadow">
<h1> <a id="Tea-Time"> <u> Tea-Time </u> <a></h1>
   <div style="float:left;  width:1%;">
   <ul> 
   <li title= "Product ID: T1">T1.&nbspMilk&nbspTea</li >
   <li title= "Product ID: T2">T2.&nbspRaw&nbspTea </li >
   <li title= "Product ID: T3">T3.&nbspKolija&nbspSingara </li >
   <li title= "Product ID: T4">T4.&nbspCoffee</li >
   <li title= "Product ID: T5">T5.&nbspBurger</li >
   <li title= "Product ID: T6">T6.&nbspSoft&nbspDrinks</li >
   </ul>
   </div>

   <div style="float:right;  width:190px;">
   <ul>
      <li> 05/-per cup&nbsp &nbsp</li > 
	  <li> 05/-per cup&nbsp &nbsp</li > 
	  <li> 07/-per piece </li>
	  <li> 10/-per cup&nbsp &nbsp</li> 
	  <li> 25/-per piece</li>
	  <li> 12/-per bottle </li>
	  </ul>
	  </div>
	  </div>
	  
	  <div id="supper" class="box-shadow">
<h1> <a id="Supper" > <u> Supper </u> <a></h1>
   <div style="float:left;  width:1%;">
   <ul> 
   <li title= "Product ID: S1">  S1.&nbspRice</li >
   <li title= "Product ID: S2">  S2.&nbspVegetables </li >
   <li title= "Product ID: S3">  S3.&nbspBeef</li >
   <li title= "Product ID: S4">  S4.&nbspMutton</li >
   <li title= "Product ID: S5">  S5.&nbspChicken</li >
   <li title= "Product ID: S6">  S6.Egg</li>
   </ul>
   </div>

   <div style="float:right;  width:180px;">
   <ul>
     <li> 10/- per plate</li > 
	  <li> 10/- per plate</li > 
	  <li> 30/- per plate </li>
	  <li> 40/- per plate</li> 
	  <li> 30/- per piece</li>
	  <li> 15/- per piece </li>
	  </ul>
	  </div>
	  </div>
	 

   
   
	
	   <div id="elixirs">
      <h1><a id="Special"><u>Weekly Evening Specials</u></a> </h1>
      <p>
        <img src="ruetcafeteria_files/images/yellow.gif" title= "Product ID: W1" alt="egg noodles" />
      </p>
      <h3 title= "Product ID: W1">Egg Noodles</h3>
      <p>
        The ultimate healthy food, this dish combines the taste of eggs,various spices and so on. Many healthy vegetables are also included 
		in this dish.We care for our students.This item is available for this week only at 45/- taka.
      </p>

	    <p>
        <img src="ruetcafeteria_files/images/soup.png" title= "Product ID: W2" alt="soup" />
      </p>
      <h3 title= "Product ID: W2">Chicken Soup</h3>
      <p>
        Well, this winter when everything is cool,try our hot & spicy
        chicken soup, made with tasty & healthy ingredient.
        Only at 50/- taka.
      </p>
	  
      <p>
        <img src="ruetcafeteria_files/images/chai.gif" title= "Product ID: W3" alt="Chai Chiller Elixir" />
      </p>
      <h3 title= "Product ID: W3">Cappuchino</h3>
      <p>
		Cappuchino! coffee drink topped with foamed milk.Enjoy this italian drink after a long busy day. Feel fresh with every sip. Only at 
		50/- taka cup.
      </p>

      <p>
        <img src="ruetcafeteria_files/images/black.gif" title= "Product ID: W4" alt="Black Brain Brew Elixir" />
      </p>
      <h3 title= "Product ID: W4">Black Brain Brew</h3>
      <p>
        Want to boost your memory?  Try our Black Brain Brew
        elixir, made with black oolong tea and just a touch
        of espresso.  Your brain will thank you for the boost.Only at 55/- taka.
      </p>
	  
	

      <p>
        Join us any evening for these and all our 
        other wonderful dishes.
      </p>
    </div>

	
	
<div id="order">
      <p>
        <img src="ruetcafeteria_files/images/bag.png" alt="bag" />
        <br />
        ORDER ONLINE
        from the 
        <a href="ruetcafeteria_files/form.php"><big><big><big>CAFETERIA KITCHEN</big></big></big></a>
        <br />
        <span>
            FAST <br />
            FRESH <br />
            TO YOUR DOOR <br />
        </span>
      </p>
      <p>
        Why wait?  You can order all our fine dishes right from our
		kitchen.  How does it work?  Just click on the CAFETERIA KITCHEN link, 
        enter your order, and behind the scenes, your food is cooked,
        packaged, and shipped to your door.
		
      </p>
	  <b>Find us on:</b> <a href="https://www.twitter.com/ruetcafeteria" title="@ruetcafeteria">
							<img src="ruetcafeteria_files/images/twitter.png" alt="twitter logo" width=30 height=30/>
						</a> <a href="http://www.facebook.com/Ruet.Cafeteria" title="Like ruetcafeteria">
							<img src="ruetcafeteria_files/images/facebook.png" alt="facebook logo" width=30 height=30/>
						</a> </a> <a href="http://plus.google.com/ruetcafeteria" title="+ruetcafeteria">
							<img src="ruetcafeteria_files/images/googleplus.png" alt="googleplus logo" width=30 height=30/>
						</a>
						
						
    </div>
  
   
   <div id="footer">
      &copy; <?php echo date ("Y") ?>, RUET CAFETERIA
      <br />
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
    </div>
	
	<div id="coupon">
      <a href="ruetcafeteria_files/freemeal.html" title="Click here to get your free meal!!">
        <img src="ruetcafeteria_files/images/ticket.gif" alt="coupon ticket" width=283px height=177px/>
      </a>
    </div>
	
</body>

	</html>