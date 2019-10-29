<?php
    if (!empty($_GET['x']) && isset($_GET['x'])) {
        if ($_GET['x'] == 0) {
            echo "<div> Cannot login your account need to be confirmed by an admin</div>";
        }
        if ($_GET['x'] == 1) {
            echo "<div> Incorrect mail or password </div>";
        }
        if ($_GET['x'] == 2) {
            echo "<div> Your Account was sucessfully created ! </div>";
        }

    }
    include_once('../view/view_login.php');
