<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/security.php');
	require_once('../model/getTestName.php');

	$idTest = Security::bdd($_POST['id']);
	$libTest = getTestName($idTest);
	//on verifie que le test existe et on affiche la vue sinon on redirige
	if ($libTest) {
		include_once('../view/view_respondTest.php');
	}
	else {
		header('Location: ../controller/ctrl_startTest.php');
	}
