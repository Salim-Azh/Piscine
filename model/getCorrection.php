<?php
//return the answers of the test if it exists
	function getCorrection($idTest) {
		require('db.php');
		$req = "SELECT correctAnswer FROM question WHERE FK_idTest = $idTest";
		$res = mysqli_query($co, $req) or die('err_getTest');

		if (mysqli_num_rows($res) != 0) {
			$answer = mysqli_fetch_all($res);
			return $answer;
		}
	}
?>