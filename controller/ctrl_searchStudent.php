<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/getSpeciality.php');
	require_once('../model/getStudent.php');

	//toutes les specialites dans la base de donnee
	$spe = getSpeciality();

	//on recupere la specialite, l'annee des etudiants recherches 
	//pour ensuite les chercher dans la bdd (avec getstudent()) et les afficher dans la vue
	$speChoice = Security::bdd($_POST['speChoice']);
	$year = Security::bdd($_POST['year']);

	//on recupere le nom et le prenom de tous les etudiants recherche
	$stu = getStudents($speChoice, $year);
	
	include_once('../view/view_statsbystudent.php');
