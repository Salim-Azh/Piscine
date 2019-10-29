<?php
    //return all the specialities existing in the database
    function getSpeciality(){
        require('db.php');
        $req = "SELECT idSpeciality, libSpeciality FROM speciality";
        $res = mysqli_query($co, $req) or die('err_getSpeciality');

        if(mysqli_num_rows($res)!=0){
            $spe = mysqli_fetch_all($res);
            return($spe);
        }
    }