<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/getTeacher.php');
	//Si on a clique sur valider un prof on obtient donc un id du professeur et on peu modifier en bdd pour indiquer que ce professeur est maintenant vallide
	$name = getTeacher();
	if (isset($_POST['id'])){
		$id = Security::bdd($_POST['id']);
		$reqID = "UPDATE teacher SET isConfirm = 1 WHERE FK_idUser = $id ";
		$resID = mysqli_query($co, $reqID) or die('err_ChangeTeacher');
		header('Location: ../controller/ctrl_valid_teacher.php');

	}

	include_once('../view/view_valid_teacher.php');
