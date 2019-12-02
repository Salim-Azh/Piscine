<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/getSpeciality.php');
	require_once('../model/getStudent.php');
	$spe = getSpeciality();
	$stu = getStudent();
	$speChoice = Security::bdd($_POST['speChoice']);
    $year = Security::bdd($_POST['year']);
	$id = getId($stu, $speChoice,$year);
	$name = getName($id);

	include_once('../view/view_statsbystudent.php');