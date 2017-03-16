<?php
session_start();
//session_unset(); 
session_destroy(); 
//$_SESSION["user"]="";
header("Location: login.php");
?>