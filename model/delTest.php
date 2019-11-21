<?php
	function delTest($idTest) {
		if (is_integer($idTest)) {
			require('db.php');

			$req = "SELECT idTest FROM test WHERE idTest=$idTest";
			$res = mysqli_query($co, $req) or die('err1_delTest');
			if (mysqli_num_rows($res) != 0) {

				$req = "DELETE FROM fill WHERE fill.FK_idTest=$idTest";
				$res = mysqli_query($co, $req) or die('err2.1_delTest');

				$req = "DELETE FROM question WHERE question.FK_idTest=$idTest";
				$res = mysqli_query($co, $req) or die('err2.2_delTest');

				$req = "DELETE FROM part WHERE part.FK_idTest=$idTest";
				$res = mysqli_query($co, $req) or die('err2.3_delTest');				
				
				$req = "DELETE FROM test WHERE test.idTest=$idTest";
				$res = mysqli_query($co, $req) or die('err2.4_delTest');

				header('Location: ../controller/ctrl_manageTest.php?x=1');
			}
			else {
				header('Location: ../controller/ctrl_manageTest.php');
			}
		}
		else {
			header('Location: ../controller/ctrl_homePage.php?x=5');
		}
	}