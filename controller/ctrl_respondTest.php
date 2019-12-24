<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/security.php');
	require_once('../model/getTestName.php');

	$idTest = Security::bdd($_POST['id']);
	$libTest = getTestName($idTest);

	if ($libTest) {
		include_once('../view/view_respondTest.php');
	}
	else {
		header('Location: ../controller/ctrl_startTest.php');
	}
