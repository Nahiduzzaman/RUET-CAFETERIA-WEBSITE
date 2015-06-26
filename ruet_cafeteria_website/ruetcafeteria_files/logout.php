<?php session_start(); 
session_destroy();
if(isset($_SERVER['HTTP_REFERER'])) {
 header('Location: '.$_SERVER['HTTP_REFERER']);  
} else {
 header('Location: index.php');  
}
exit; 
?>
<!--?php session_start();?>
<!--?php include "base.php"; $_SESSION = array(); session_destroy() ?>
<meta http-equiv="refresh" content="0;about.php"-->  