<?php
    require_once('../model/security.php');// need for User static class use
    require_once('../model/getGroup.php');
    require_once('../model/getSpeciality.php');

    // get database data about groups and speciality
    // will be used in the view
    $grp = getGroup();
    $spe = getSpeciality();

    /*Debug
    *
    * var_dump($grp);
    * var_dump($spe);
    *
    */
    
    //if x varible exist and have content different of : 0, null or ''
    if (!empty($_GET['x']) && isset($_GET['x'])) {
        if ($_GET['x'] == 1) {
            echo "<div>This account is already in DB</div>";
        }
    }
    include_once('../view/view_register.php');
