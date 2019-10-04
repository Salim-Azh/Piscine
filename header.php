<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- favicon -->
    <link rel="icon" href=".\img\toeic.jpg" />
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fait fonctionner ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- font test -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- font roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- font titre courgette -->
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
    <!-- font presentation -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- carte -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- titre test -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!-- jquery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Navigation dynamique -->
    <script src="./js/nav_dyn.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap js -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Connection à la base de données -->
 

    <title>TOEIC</title>
  </head>

  <body>
    <nav id="nav" class="shadow-sm navbar navbar-expand-lg sticky-top navbar-light px-5">

      <h1 id="titre" class="row font_blue align-items-center mt-2 ">
      <!-- logo de l'entreprise -->
      <img id="logo" src=".\img\toeic.jpg" width="70" height="70" class="align-items-center logo" >
      <strong>&nbsp;TOEIC BLANC</strong></h1>
      <!-- bouton hamburger pour un menu responsif -->
      <a class="navbar-brand d-flex justify-content-end">  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_target" aria-controls="collapse_target" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>                     
        </button>
      </a>

      <!-- lien de navigation -->
      <div class="ml-5 mt-4 collapse navbar-collapse" id="collapse_target" >
        <ul id="menu" class="navbar-nav mr-auto mb-4 ml-5 ">
          <li>
            <a class="mr-2 nav-link " href="./index.php" >SE CONNECTER</a>
          </li>

          <!-- Menu déroulant au passage de la souris -->
          
            
            <li class="mr-2 nav-item " ><a   style= "text-decoration: none; outline:none;" class= "nav-link " href="#" id="menu"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

            
            <ul class="shadow">
              <li class="dropdown-item "><a href="./entrees.php" style= "text-decoration: none;" >
              <h7>stats 1</h7>
              </a></li>
              <li class="dropdown-item "><a  href="./plats.php" style= "text-decoration: none;" href="">
              <h7 >stats 2</h7>
              </a></li>
              <li class="dropdown-item "><a href="./dessert.php" style= "text-decoration: none;" href="">
              <h7 >stats 3</h7>
              </a> </li>
            </ul>
          
          </li>

          <li>
            <a class="mr-2 nav-link " href="./menu.php" >CREER UN COMPTE</a>
          </li>
          

          <?php
            if (isset($_SESSION['user'])){
              echo "<li><a class=\"nav-link ml-5\" href=\"controleur/logout.php\">Se déconnecter</a></li>";
            }
          ?>
        </ul>
        
      </div>
    </nav>
<script type="text/javascript">

</script>
                                              
                                                   

