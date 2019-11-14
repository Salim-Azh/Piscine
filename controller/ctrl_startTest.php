<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/getTest.php');

	$test = getTest();

	include_once('../view/view_startTest.php');