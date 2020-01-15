<?php
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/test.php');
	$nameTest = Security::bdd($_POST['nameTest']);
	$tabChoix = [];
	//On récupère chaque réponse on les insère dans un tableau et on créé ensuite un test
	for ($i = 1; $i <= 200; $i++) {
		array_push($tabChoix, Security::bdd($_POST[$i]));
	}
	
	$test = new Test($tabChoix,$nameTest,$co);

	
   
