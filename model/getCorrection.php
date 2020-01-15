<?php
	//return the correct answers of the test if it exists
	// $idTest : int from 1 to 99999999999
	function getCorrection($idTest) {
		require('db.php');
		$req = "SELECT correctAnswer FROM question WHERE FK_idTest = $idTest";
		$res = mysqli_query($co, $req) or die('err_getTest');

		if (mysqli_num_rows($res) != 0) { // if the request result have row(s)
			$answer = mysqli_fetch_all($res);
			return $answer;
		}
	}
?>