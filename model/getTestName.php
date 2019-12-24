<?php
	function getTestName($idTest) {
		require('db.php');
		if (is_integer($idTest)) {
			$reqName = "SELECT nameTest FROM test WHERE idTest=$idTest";
			$resName = mysqli_query($co, $reqName) or die('err_NameTest');

			if (mysqli_num_rows($resName) != 0) {
				$test = mysqli_fetch_all($resName);
				$testName = $test[0][0];

				return $testName;
			}
			else {
				return null;
			}
		}
		else {
			return null;
		}
	}