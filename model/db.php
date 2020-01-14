<?php
	//link to database
	$host = "localhost";
	$user = "root";
	$DB = "mock_toeic";
    $passwd = "";
	$co = mysqli_connect($host, $user, $passwd, $DB) or die("err_db.php");
