<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/getQuestions.php');

	$idTest = Security::bdd($_POST['idTest']);
	$verify = getQuestions($idTest);
	if($verify) {
		$testName = $verify[0];
		$question = $verify[1];

		include_once('../view/view_editTest.php');
	}
	else {
		header('Location: ctrl_manageTest.php');
	}