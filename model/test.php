<?php
	class Test{
		protected $co;
		protected $tabChoix;
		protected $nameTest;

		function __construct($tabChoix,$nameTest,$co) {
		 	require('db.php');
		 	$this->co = $co;
		 	$this->tabChoix=$tabChoix;
		 	$this->nameTest=$nameTest;

			$res = mysqli_query($this->co, "SELECT * From test Where nameTest='$this->nameTest'") or die("err1 test.php");
			//the test nameTest is not in the database
			if(mysqli_num_rows($res)==0){
				// test insertion
				$req = "INSERT INTO test(nameTest) VALUES('$this->nameTest')";
				mysqli_query($this->co, $req) or die("err2 test.php");
				$idTest = mysqli_insert_id($this->co);

				//parts creation
				for ($i=1; $i < 8 ; $i++) { 
					$req = "INSERT INTO part(idPart, FK_idTest, libPart) VALUES($i , $idTest,'Partie ".$i."')";
					mysqli_query($this->co, $req) or die("err3 test.php");
				}

				//questions insertion
				for ($i=1; $i < 201 ; $i++) { 
					$reponse= $this->tabChoix[$i-1];
					if ($i < 7) {
						mysqli_query($this->co, "INSERT INTO question(FK_idTest, FK_idPart, idQuestion, correctAnswer) VALUES($idTest, 1, $i, '$reponse')") or die("err4 test.php");
					}
					elseif ($i > 6 && $i < 32) {
						mysqli_query($this->co, "INSERT INTO question(FK_idTest, FK_idPart, idQuestion, correctAnswer) VALUES($idTest, 2, $i, '$reponse')") or die("err5 test.php");
					}
					elseif ($i > 31 && $i < 71) {
						mysqli_query($this->co, "INSERT INTO question(FK_idTest, FK_idPart, idQuestion, correctAnswer) VALUES($idTest, 3, $i, '$reponse')") or die("err6 test.php");
					}
					elseif ($i > 70 && $i < 101) {
						mysqli_query($this->co, "INSERT INTO question(FK_idTest, FK_idPart, idQuestion, correctAnswer) VALUES($idTest, 4, $i, '$reponse')") or die("err7 test.php");
					}
					elseif ($i > 100 && $i < 131) {
						mysqli_query($this->co, "INSERT INTO question(FK_idTest, FK_idPart, idQuestion, correctAnswer) VALUES($idTest, 5, $i, '$reponse')") or die("err8 test.php");
					}
					elseif ($i > 130 && $i < 147) {
						mysqli_query($this->co, "INSERT INTO question(FK_idTest, FK_idPart, idQuestion, correctAnswer) VALUES($idTest, 6, $i, '$reponse')") or die("err9 test.php");
					}
					//($i > 146)
					else {
						mysqli_query($this->co, "INSERT INTO question(FK_idTest, FK_idPart, idQuestion, correctAnswer) VALUES($idTest, 7, $i, '$reponse')") or die("err10 test.php");
					}
				}

				//operation successful
				$x=1;
				header('Location: ../controller/ctrl_homePage.php?x='.$x);
			}
			else {
				//this name is already used
				$x= 2;
				header('Location: ../controller/ctrl_homePage.php?x='.$x);	
			}
			
			
		}
	}
 ?>