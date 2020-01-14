<?php
    session_start(); //On demarre la session
    //Appel du model
    require_once('../model/db.php'); //connexion a la base de donnee

    //On verfie si des variables sont passees dans l'url (GET)
    if(isset($_SESSION['co'])){
        //si la variable x est instanciee et qu'elle n'est pas vide
        if (!empty($_GET['x']) && isset($_GET['x'])) {
            //en fonction de sa valeur on affiche un message
            if ($_GET['x'] == 1) {
                echo '<div class="font_blue">Test créé avec succès !</div>';
            }
            if ($_GET['x'] == 2) {
                echo '<div class="font_blue">Nom de test déjà utilisé</div>';
            }
            if ($_GET['x'] == 3) {
                echo '<div class="font_blue">Erreur lors du démarrage du test</div>';
            }
            if ($_GET['x'] == 4) {
                echo '<div class="font_blue">Réponses enregistrées</div>';
            }
            if ($_GET['x'] == 5) {
                echo '<div class="font_blue">Erreur lors de la modification du test</div>';
            }
            if ($_GET['x'] == 6) {
                echo '<div class="font_blue">Test mis à jour</div>';
            }
        }
        //puis on inclut la vue
        include_once('../view/view_homePage.php');
    }
    else{
        //Si la variable de session n'est pas initialsee alors on retourne a la page de connexion
        header('Location: ../index.php');
    }