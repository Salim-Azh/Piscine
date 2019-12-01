<?php  
	function saveEditTest($idTest, $nameTest, $tabChoix) {
		require('db.php');
		if (is_integer($idTest)) {
			$req = "SELECT idTest, nameTest FROM test WHERE idTest=$idTest";
			$res = mysqli_query($co, $req) or die('err1_saveEditTest');

			if (mysqli_num_rows($res) != 0) {
				$test = mysqli_fetch_all($res);

				if ($test[0][1] != $nameTest) {
					$req = "UPDATE test SET nameTest='$nameTest' WHERE idTest=$idTest";
					$res = mysqli_query($co, $req) or die('errName_saveEditTest');
				}

				$req = "SELECT idQuestion, correctAnswer FROM question WHERE FK_idTest=$idTest";
				$res = mysqli_query($co, $req) or die('errQuestion_saveEditTest');

				if (mysqli_num_rows($res) != 0) {
					$question = mysqli_fetch_all($res);
					for ($i=0; $i < 200 ; $i++) { 
						if ($tabChoix[$i] != $question[$i][1]) {
							$req = "UPDATE question SET correctAnswer='$tabChoix[$i]' WHERE FK_idTest=$idTest AND idQuestion=$i+1";
							$res = mysqli_query($co, $req) or die('errQuestionSave_saveEditTest');
						}
					}
				}
				else {
					header('Location: ../controller/ctrl_editTest.php');
				}
				header('Location: ../controller/ctrl_homePage.php?x=6');
			}
			else {
				header('Location: ../controller/ctrl_editTest.php');
			}
		}
		else {
			header('Location: ../controller/ctrl_homePage.php?x=5');
		}
	}
?>