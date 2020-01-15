<?php
	//return test's name and question where the test id is $idTest in DB
	// $idTest = int from 1 to 99999999999
	function getQuestions($idTest) {
		require('db.php');

		if (is_integer($idTest)) {
			$reqName = "SELECT nameTest FROM test WHERE idTest=$idTest";
			$resName = mysqli_query($co, $reqName) or die('err_getQuestions.php1');

			$reqQuestion = "SELECT idQuestion,correctAnswer FROM question WHERE FK_idTest=$idTest";
			$resQuestion = mysqli_query($co, $reqQuestion) or die('err_getQuestions.php2');

			if (mysqli_num_rows($resName) != 0 && mysqli_num_rows($resQuestion) != 0) {
				$test = mysqli_fetch_all($resName);
				$testName = $test[0][0];

				$question = mysqli_fetch_all($resQuestion);

				return [$testName, $question];
			}
			else {
				return null;
			}
		}
		else {
			return null;
		}
	}
