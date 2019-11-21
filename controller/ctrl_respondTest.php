<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/security.php');


	$idTest = Security::bdd($_POST['id']);
	if (is_integer($idTest)) {
		$req = "SELECT idTest, nameTest FROM test WHERE idTest=$idTest";
		$res = mysqli_query($co, $req) or die('err_getTestToAnswer');

		if (mysqli_num_rows($res) != 0) {
			$test = mysqli_fetch_all($res);
			$idTest = $test[0][0];
			$libTest = $test[0][1];
			include_once('../view/view_respondTest.php');
		}
		else {
			require_once('../model/getTest.php');
			$test = getTest();
			header('Location: ../controller/ctrl_startTest.php');
		}
	}
	else {
		$x = 3;
		header('Location: ../controller/ctrl_homePage.php?x='.$x);
	}
