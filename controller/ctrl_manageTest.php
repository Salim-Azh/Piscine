<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/getTest.php');

	// get database data about tests
    // will be used in the view
	$test = getTest();
	
	if (isset($_POST['Code']) && !empty($_POST['Code']) && isset($_POST['lib']) && !empty($_POST['lib']) && isset($_POST['idTest']) && !empty($_POST['idTest'])){
		$code = $_POST['Code'];
		$libel = $_POST['lib'];
		$idTest = $_POST['idTest'];
	
		//code insertion and creation
		$caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$longueurMax = strlen($caracteres);
		$chaineAleatoire = '';
		for ($i = 0; $i < 7; $i++){
			$chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
		}
		$code = $chaineAleatoire;
			
		$req = "UPDATE test SET Code = '$chaineAleatoire' Where idTest = $idTest ";
		mysqli_query($co, $req) or die("err Changement code test");
	}

	if (isset($_POST['Supprimer']) && !empty($_POST['Supprimer'])) {
		$id = $_POST['Supprimer'];
		$req = "DELETE FROM test WHERE idTest = $id";
		mysqli_query($co, $req) or die("err Suppression");
		echo('<meta http-equiv="refresh" content="0;URL=../controller/ctrl_manageTest.php">');
	}

	include_once('../view/view_manageTest.php');
