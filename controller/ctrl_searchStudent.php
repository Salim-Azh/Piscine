<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/getSpeciality.php');
	require_once('../model/getStudent.php');
	//on récupère la specialité, l'année des étudiants recherchés pour ensuite les chercher dans la bdd (avec getstudent()) et les afficher dans la vue
	$spe = getSpeciality();
	$speChoice = Security::bdd($_POST['speChoice']);
    	$year = Security::bdd($_POST['year']);
    	$name = getStudent($speChoice, $year);
	include_once('../view/view_statsbystudent.php');
