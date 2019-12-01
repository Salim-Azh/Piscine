<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/getSpeciality.php');
//get speciality in db
	$spe = getSpeciality();
	


	include_once('../view/view_statsbystudent.php');