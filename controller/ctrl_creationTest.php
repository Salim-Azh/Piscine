<?php
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/test.php');
	$nameTest = Security::bdd($_POST['nameTest']);
	$tabChoix = [];
	
	for ($i = 1; $i <= 200; $i++) {
		array_push($tabChoix, Security::bdd($_POST[$i]));
	}
	echo ('<div class="spinner-border text-success" role="status">
  		<span class="sr-only">Loading...</span>
		</div>');
	$test = new Test($tabChoix,$nameTest,$co);

	
   
