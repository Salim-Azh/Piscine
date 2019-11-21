<?php  
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/delTest.php');

	$idTest = Security::bdd($_POST['id']);

	delTest($idTest);