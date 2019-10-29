<?php
    //return all the groups existing in the database
    function getGroup(){
        require('db.php');
        $req = "SELECT idGrp, libGrp FROM grp";
        $res = mysqli_query($co, $req) or die('err_getGroup');

        if(mysqli_num_rows($res)!=0){
            $grp = mysqli_fetch_all($res);
            return($grp);
        }
    }