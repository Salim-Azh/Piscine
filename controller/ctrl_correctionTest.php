<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/fill.php');
	require_once('../model/getCorrection.php');
	
	//on récupère l'id du test
	$idTest = Security::bdd($_POST['idTest']);
	$tabCorrection = getCorrection($idTest);
	$tabChoix = [];
	$repPart1 = 0;
	$repPart2 = 0;
	$repPart3 = 0;
	$repPart4 = 0;
	$repPart5 = 0;
	$repPart6 = 0;
	$repPart7 = 0;
	//on calcule le score en fonction
	for ($i = 1; $i <= 200; $i++) {
		array_push($tabChoix, Security::bdd($_POST[$i]));
	}

	for ($i=0; $i < 6; $i++) { 
		if ($tabCorrection[$i][0] == $tabChoix[$i]) {
			$repPart1 += 1;
		}
	}

	for ($i=6; $i < 31; $i++) { 
		if ($tabCorrection[$i][0] == $tabChoix[$i]) {
			$repPart2 += 1;
		}
	}

	for ($i=31; $i < 70; $i++) { 
		if ($tabCorrection[$i][0] == $tabChoix[$i]) {
			$repPart3 += 1;
		}
	}

	for ($i=70; $i < 100; $i++) { 
		if ($tabCorrection[$i][0] == $tabChoix[$i]) {
			$repPart4 += 1;
		}
	}

	for ($i=100; $i < 130; $i++) { 
		if ($tabCorrection[$i][0] == $tabChoix[$i]) {
			$repPart5 += 1;
		}
	}

	for ($i=130; $i < 146; $i++) { 
		if ($tabCorrection[$i][0] == $tabChoix[$i]) {
			$repPart6 += 1;
		}
	}

	for ($i=146; $i < 200; $i++) { 
		if ($tabCorrection[$i][0] == $tabChoix[$i]) {
			$repPart7 += 1;
		}
	}

	$rep = [];
	array_push($rep, $repPart1);
	array_push($rep, $repPart2);
	array_push($rep, $repPart3);
	array_push($rep, $repPart4);
	array_push($rep, $repPart5);
	array_push($rep, $repPart6);
	array_push($rep, $repPart7);
	//On créé le score 
	$fill = new Fill($idTest, $_SESSION['idUser'], $rep, $co);

	
	//on modifie le code du test lorsque le premier élève à terminé
		$caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$longueurMax = strlen($caracteres);
		$chaineAleatoire = '';
		for ($i = 0; $i < 7; $i++)
		{
			$chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
		}
			$code = $chaineAleatoire;
			
		$req = "UPDATE test SET Code = '$chaineAleatoire' Where idTest = $idTest ";
			mysqli_query($co, $req) or die("err Changement code test");

		
	
