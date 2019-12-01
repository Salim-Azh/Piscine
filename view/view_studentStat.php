<?php include_once("header.php");


$grp = getAllResults($_SESSION['idUser']);

/*for ($i = 0; $i < 7; $i++) {
    echo ($grp[$i][0]);
}*/

for($i = 0; $i < (count($grp[0]) % 7); $i++){
    echo ("Test n°" . $i);
    echo ($grp[$i][0]) . " -";
    echo ($grp[$i][0]) . " -";
    echo ($grp[$i][0]) . " -";
    echo ($grp[$i][0]) . " -";
    echo ($grp[$i][0]) . " -";
    echo ($grp[$i][0]) . " -";
    echo ($grp[$i][0]) . " -";
}
