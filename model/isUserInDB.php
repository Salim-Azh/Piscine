<?php
//return true if the user is in the database else false
function isUserInDB($mail,$pwd){
    require('db.php');

    // mysql query
    $req = "SELECT * FROM user where mailUser = '$mail' and pwdUser = '$pwd'";
    $res = mysqli_query($co, $req) or die('err_isUserInDB');

    if(mysqli_num_rows($res)!=0){ // if the query result $res have line the user exist
        return true;
    }
    return false; // no line : the user is not in DB
}