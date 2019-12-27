<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/getTest.php');
	require_once('../model/getNoteTotale.php');

	$test = getTest();

	if (isset($_POST['code']) ){
		$code = ($_POST['code']);
	
	}

	include_once('../view/view_startTest.php');