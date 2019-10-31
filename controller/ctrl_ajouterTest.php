<?php
	require_once('../model/db.php');

	if (isset($_POST['ajouter_test'])) {
		//on insert
		$insert_test = $DB->prepare('INSERT INTO test(nameTest) VALUES (:nameTest)');
		$req_insert_test = $insert_test->execute(array( 'nameTest' => $_POST['nameTest'] )); 
		$insert_test->closeCursor();
		//on redirige
		header('Location: ../Controller/ctrl_homePage.php'); 
	}