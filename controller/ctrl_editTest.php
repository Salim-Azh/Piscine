<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');

	$idTest = Security::bdd($_POST['idTest']);

	if (is_integer($idTest)) {
		$reqName = "SELECT nameTest FROM test WHERE idTest=$idTest";
		$resName = mysqli_query($co, $reqName) or die('err_NameTest');

		$reqQuestion = "SELECT idQuestion,correctAnswer FROM question WHERE FK_idTest=$idTest";
		$resQuestion = mysqli_query($co, $reqQuestion) or die('err_Question');

		if (mysqli_num_rows($resName) != 0 && mysqli_num_rows($resQuestion) != 0) {
			$test = mysqli_fetch_all($resName);
			$testName = $test[0][0];

			$question = mysqli_fetch_all($resQuestion);

			include_once('../view/view_editTest.php');
		}
		else {
			header('Location: ctrl_manageTest.php');
		}
	}
	else {
		header('Location: ctrl_manageTest.php');
	}