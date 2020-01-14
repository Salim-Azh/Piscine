<?php
	//link to database
	$host = "ec2-54-228-237-40.eu-west-1.compute.amazonaws.com:5432";
	$user = "fgvvlzoxvsztlz";
	$DB = "mock_toeic";
    $passwd = "d65bca6e99f42e34144a0f534a1a4df16650c19ce6586a55747f9d41d9bbe43d";
	$co = mysqli_connect($host, $user, $passwd, $DB) or die("err_db.php");
