<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/getSpeciality.php');
	require_once('../model/getGroup.php');
	require_once('../model/getGroupNote.php');

	//get speciality, group in db
	$spe = getSpeciality();
	$grp = getGroup();
	
	//On récupère les groupe en bdd
	if(isset($_POST['speChoice'])) {
        $tempo = $_POST['speChoice'];
		$req = "SELECT libSpeciality FROM speciality WHERE idSpeciality = $tempo";
		$res = mysqli_query($co, $req) or die("err Récupération groupe");
		$speciality = mysqli_fetch_all($res);
    }

	include_once('../view/view_statsbyclass.php');
