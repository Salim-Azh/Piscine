<?php
	class Test{
		protected $co;
		protected $tabChoix;
		protected $nameTest;
		protected $part;

		 function __construct($tabChoix,$nameTest,$co) {
		 	require('db.php');
		 	$this->co = $co;
		 	$this->tabChoix=$tabChoix;
		 	$this->nameTest=$nameTest;

			$res = mysqli_query($this->co, "SELECT * From test Where nameTest='$this->nameTest'");

		 	$req = "INSERT INTO test(nameTest) VALUES('$this->nameTest')";
            mysqli_query($this->co, $req) or die("erreur nameTest");
            $idTest = mysqli_insert_id($this->co);
            
            $req = "INSERT INTO part(FK_idTest, libPart) VALUES($idTest,'partie 1')";
            mysqli_query($this->co, $req) or die("erreur partie");
            $idpart1 = mysqli_insert_id($this->co);
            $req = "INSERT INTO part(FK_idTest, libPart) VALUES($idTest,'partie 2')";
            mysqli_query($this->co, $req) or die("erreur partie");
            $idpart2 = mysqli_insert_id($this->co);


             for ($i=0; $i < 200 ; $i++) { 
             	$reponse= $this->tabChoix[$i];
             	if ($i<100) {
             		$partie=$idpart1;
             	}else{
             		$partie=$idpart2;
             	}
             	
            	$req = "INSERT INTO question(FK_idTest,FK_idPart,correctAnswer) VALUES($id,'$partie','$reponse')";
            	mysqli_query($this->co, $req) or die("erreur questionTest");


            	

             }
             $x=1;
             //header('Location: ../controller/ctrl_homePage.php?x='.$x);
		 }
	}
 ?>