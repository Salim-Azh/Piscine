
<?php 
session_start();
session_destroy();
header("Location:./ctrl_login.php"); ?>