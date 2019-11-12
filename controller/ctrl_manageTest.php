<?php
	session_start();
	require_once('../model/security.php');
	require_once('../model/getTest.php');

	// get database data about tests
    // will be used in the view
	$test = getTest();

	include_once('../view/view_manageTest.php');
