<?php
	session_start();
	require_once('../model/security.php');
	require_once('../model/getTest.php');
	require_once('../model/security.php');

	// get database data about tests
    // will be used in the view
	$test = getTest();
	if (!empty($_GET['x']) && isset($_GET['x'])) {
		$x = Security::bdd($_GET['x']);
	}
	else {
		$x = -1;
	}

	include_once('../view/view_manageTest.php');
