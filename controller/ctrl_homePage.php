<?php
session_start();
require_once('../model/db.php');
require_once('../model/security.php');


if (!empty($_GET['x']) && isset($_GET['x'])) {
    if ($_GET['x'] == 1) {
        echo '<div class="font_blue">Test créé avec succès !</div>';
    }
}
include_once('../view/view_homePage.php');