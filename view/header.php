
<!doctype html>
<html lang="en">
  <head>
    <!-- favicon -->
    <link rel="icon" href="..\img\toeic.jpg" />
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- font test -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- font roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- font presentation -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- jquery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Navigation dynamique -->
    <script src="../js/nav_dyn.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- fichier css -->
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <!-- Bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- graphs / chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <title>TOEIC</title>
  </head>

  <body>
 
      <nav id="nav" class="shadow-sm navbar navbar-expand-lg sticky-top navbar-light px-5">

        <h2 id="titre" class="row font_blue align-items-center mt-2 ">
        <!-- logo de l'entreprise -->
        <img id="logo" src="..\img\toeic.jpg" width="70" height="70" class="align-items-center logo" >
        <strong>&nbsp; TOEIC</strong></h2>
        <!-- bouton hamburger pour un menu responsif -->
        <a class="navbar-brand d-flex justify-content-end">  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_target" aria-controls="collapse_target" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>                     
          </button>
        </a>

            
            
            <?php
            //on affiche des choix différent dans le header si il est connecté / pas connecté / admin ou étudiant
            
              if (isset($_SESSION['adm'])){
                if ($_SESSION['adm'] == 1){
                  include_once("header_admin.php");
                }elseif ($_SESSION['adm'] == 0) {
                  include_once("header_user.php");
                }
              }else{
                // sinon pas connecter on affiche donc le "se connecter " et "s'enregistrer"
                include_once("header1.php");
              }
            ?>
          
          
        
      </nav>

                                              
                                                   

