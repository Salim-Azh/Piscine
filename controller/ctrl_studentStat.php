<?php
    session_start();
    require_once('../model/db.php');
    require_once('../model/security.php');
    require_once('../model/getAllNote.php');
    require_once('../model/getStudent.php');


    if (isset($_GET['id']) && isset($_GET['id'])){ //consultation depuis un compte enseignant
        $data = getStudent($_GET['id']);
        //var_dump($data);
        $nom = $data[0][1];
        $prenom = $data[0][0];
        $id = $_GET['id'];
    } 
    else{ // Etudiant consulte ses stats
        $nom = $_SESSION['firstName'];
        $prenom = $_SESSION['name'];
        $id = $_SESSION['idUser'];
    }

    //affichage par defaut
    $type = 0; 
    if(isset($_POST['all'])) { 
        $type = 0;
    }
    if(isset($_POST['listening'])) { 
        $type = 1; 
    }
    if(isset($_POST['reading'])) { 
        $type = 2;
    }

    //Take all student note
    $res = getAllNote($id, $type);

    include_once('../view/view_studentStat.php');

