<?php
	//call model
    require_once('../model/user.php'); // need for User static class use
    require_once('../model/security.php'); // get and display safe data 
	require_once('../model/isUserInDB.php');
	require_once("../model/db.php"); // connection to database

	// form data recovery from the view
	$mail = Security::bdd($_POST['mail']);
	$pwd = sha1(Security::bdd($_POST['pwd']));

	$exist = isUserInDB($mail,$pwd); //is the user in the data base
	
	if($exist){
		// user connection
		$user = new User($co, $mail, $pwd);
		if($_SESSION['adm'] == 1 && $_SESSION['confirm'] == '1'){
			header('Location: ../controller/ctrl_homePage.php');
		}
		elseif ($_SESSION['adm'] == 0) {
			header('Location: ../controller/ctrl_homePage.php');
		}
	}
	else{
		//redirection to login page connection is invalid
		$x = 1;
		header('Location: ../controller/ctrl_login.php?x='.$x);
    }
