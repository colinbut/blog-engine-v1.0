<?php

    include "../dataAccess/dbManager.php";

    function authenticate($user, $pwd) {

        $num_rows = mysql_num_rows(getUserCredentials($user, $pwd));

        // there is this user in db
        if($num_rows == 1) {
            return true;
        }
        else{
            return false;   
        }

    }

    $user = $_POST["USER"];
    $pwd = $_POST["PW"];

    if(!authenticate($user, $pwd)) {
        
        header("WWW-Authenticate: Basic Realm=\"Blog Engine v1.0's Blog Entry Form\"");
        header("HTTP/1.1 401 Unauthorised");
        
        // print message about incorrect credentials
        
        exit;
    }
    else{
        header('Location: ../index.php'); 
    }




?>