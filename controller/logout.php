
<?php 
session_start();
//Clean the session array
$_SESSION = array();
// Destroy session
session_destroy();
// Destroy the session variable
unset($_SESSION);

header("Location:./ctrl_login.php");
