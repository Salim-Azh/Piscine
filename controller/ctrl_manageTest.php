<?php
	session_start();
	require_once('../model/security.php');
	require_once('../model/getTest.php');

	// get database data about tests
    // will be used in the view
	$test = getTest();
	
	if (isset($_POST['Code']) and (isset($_POST['lib'])) ){
		$code = ($_POST['Code']);
		$libel = ($_POST['lib']);
	
	}

	include_once('../view/view_manageTest.php');
