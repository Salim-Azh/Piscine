<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/getQuestions.php');

	//On verifie que le test correspond bien a une correction et on recupere l'id du test en question
	$idTest = Security::bdd($_POST['idTest']);
	$verify = getQuestions($idTest);

	if($verify) { //si getQuestion ne renvoi pas null
		$testName = $verify[0];
		$question = $verify[1];

		include_once('../view/view_editTest.php');
	}
	else {
		header('Location: ctrl_manageTest.php');
	}
