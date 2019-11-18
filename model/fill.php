<?php
	class Fill 
	{
		private $co;
		private $idTest;
		private $idUser;
		private $score;

		function __construct($idTest, $idUser, $score, $co)
		{
			$this->co = $co;
			$this->idTest = $idTest;
			$this->idUser = $idUser;
			$this->score = $score;

			$date = "date";
			$req = "INSERT INTO $date(idDate, dateTest) VALUES(NULL, CURRENT_TIMESTAMP)" or die('errDate fill.php');
			mysqli_query($this->co, $req);
			$idDate = mysqli_insert_id($this->co);
			for ($i=0; $i < 7; $i++) { 
				mysqli_query($this->co, "INSERT INTO fill(FK_idTest, FK_idUser, FK_idPart, FK_idDate, score) VALUES($this->idTest, $this->idUser, $i+1, $idDate , $score[$i])") or die('err'.$i.' fill.php');
			}
			$x = 4;
			header('Location: ../controller/ctrl_homePage.php?x='.$x);
		}
	}
?>