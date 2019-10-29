<?php
    require_once('../model/user.php');
    require_once('../model/security.php');
	require_once('../model/isUserInDB.php');
	require_once("../model/db.php");

	$mail = Security::bdd($_POST['mail']);
	$pwd = Security::bdd($_POST['pwd']);

	$exist = isUserInDB($mail,$pwd);
	
	if($exist){
		$user = new User($co, $mail, $pwd);
		if($_SESSION['adm'] == 1 && $_SESSION['confirm'] == '1'){
			header('Location: ../controller/ctrl_homePage.php');
		}
		elseif ($_SESSION['adm'] == 0) {
			header('Location: ../controller/ctrl_homePage.php');
		}
	}
	else{
		$x = 1;
		header('Location: ../controller/ctrl_login.php?x='.$x);
    }
