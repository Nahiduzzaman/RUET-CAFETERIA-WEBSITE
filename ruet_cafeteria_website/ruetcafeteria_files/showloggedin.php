<?php include "base.php"; ?>
<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
	 ?>
	 <p> <?php echo "$_SESSION[Username]"?><a href="newlogin2.php">LOGGED IN</a></p>
	 
		<?php
		}
		
		else
		{
		?>
		<!--p>LOG IN</p-->
		<?php
		}
		?>