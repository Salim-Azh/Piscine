<?php
session_start();
require_once('../model/db.php');
require_once('../model/security.php');
if(isset($_SESSION['co'])){

if (!empty($_GET['x']) && isset($_GET['x'])) {
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
include_once('../view/view_homePage.php');
}else{
     header('Location: ../index.php');
}