<?php
	session_start();
	require_once('../model/db.php');
	require_once('../model/security.php');
	require_once('../model/user.php');

	//on teste si tous les champs on bien été reçu et on compare les nouveaux entre eux et l'ancien avec celui stocké en bdd
	//on affiche ensuite un message en fonction
	if(isset($_POST['mdp1']) and isset($_POST['mdp2']) and isset($_POST['mdp0'])){
		$mdp0 = $_POST['mdp0'];
		$mdp1 = $_POST['mdp1'];
		$mdp2 = $_POST['mdp2'];
		if ($mdp1 != $mdp2 or $_SESSION['pwd'] != sha1($mdp0)){
			echo ('<p class="font_blue"> LES MOTS DE PASSE NE CORRESPONDENT PAS</p>');
		}else{
			$idUser = $_SESSION['idUser'];
			$newpwd = sha1(Security::bdd($mdp1));
        	$modifPwd = "UPDATE user SET pwdUser = '$newpwd' WHERE idUser = '$idUser'";
       		mysqli_query($co, $modifPwd) or die("err change pwd");

       		echo ('<p class="font_blue"> MOT DE PASSE MODIFIE</p>');
		}
	}

	include_once('../view/view_changePassword.php');
