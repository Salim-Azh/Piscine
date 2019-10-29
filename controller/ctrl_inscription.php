<?php
	require_once('../model/db.php');
    require_once('../model/user.php');
    require_once('../model/security.php');

    // We make harmless HTML tags that the user could enter with html function
    $type = Security::bdd($_POST['type']);
    $name = Security::bdd($_POST['name']);
    $firstName = Security::bdd($_POST['firstName']);
    $mail = Security::bdd($_POST['mail']); 
    $pwd = Security::bdd($_POST['pwd']);
    if($type == 'Eleve'){
        $numStu = Security::bdd($_POST['numStu']);
        $spe = Security::bdd($_POST['spe']);
        $year = Security::bdd($_POST['year']);
        $grp = Security::bdd($_POST['grp']);
        $user = new User($co, $name, $firstName, $mail, $pwd, $numStu, $spe, $year, $grp);
    }
    else {
        $user = new User($co, $name, $firstName, $mail, $pwd);
    }