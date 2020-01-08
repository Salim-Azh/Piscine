<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/getSpeciality.php');
	require_once('../model/getGroup.php');
	require_once('../model/getGroupNote.php');

//get speciality in db
	$spe = getSpeciality();
	$grp = getGroup();

	include_once('../view/view_statsbyclass.php');