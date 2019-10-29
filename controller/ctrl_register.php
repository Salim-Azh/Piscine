<?php
    require_once('../model/security.php');
    require_once('../model/getGroup.php');
    require_once('../model/getSpeciality.php');

    $grp = getGroup();
    $spe = getSpeciality();
    #var_dump($grp);
    #var_dump($spe);

    if (!empty($_GET['x']) && isset($_GET['x'])) {
        if ($_GET['x'] == 1) {
            echo "<div>This account is already in DB</div>";
        }
    }
    include_once('../view/view_register.php');
