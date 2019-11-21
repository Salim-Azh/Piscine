<?php  
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/saveEditTest.php');
	$nameTest = Security::bdd($_POST['nameTest']);
	$idTest = Security::bdd($_POST['idTest']);
	$tabChoix = [];
	
	for ($i = 1; $i <= 200; $i++) {
		array_push($tabChoix, Security::bdd($_POST[$i]));
	}

	saveEditTest($idTest, $nameTest, $tabChoix);
?>