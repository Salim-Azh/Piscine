<?php
    //if x varible exist and have content different of : 0, null or ''
    if (!empty($_GET['x']) && isset($_GET['x'])) {
        if ($_GET['x'] == 3) {
            echo '<div class="font_blue">Cannot login to your account need to be confirmed by an admin</div>';
        }
        if ($_GET['x'] == 1) {
            echo '<div class="font_blue"> Incorrect mail or password </div>';
        }
        if ($_GET['x'] == 2) {
            echo '<div class="font_blue"> Your Account was sucessfully created ! </div>';
        }
    }
    include_once('../view/view_login.php');
