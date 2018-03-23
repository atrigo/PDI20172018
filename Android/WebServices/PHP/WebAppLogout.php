<?php    
session_start(); 
session_destroy();
header('Location: WebApp.php');  
exit();  
?>