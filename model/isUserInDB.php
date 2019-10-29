<?php
//return true if the user is in the database else false
function isUserInDB($mail,$pwd){
    require('db.php');
    $req = "SELECT * FROM user where mailUser = '$mail' and pwdUser = '$pwd'";
    $res = mysqli_query($co, $req) or die('err_isUserInDB');

    if(mysqli_num_rows($res)!=0){
        return true;
    }
    return false;
}