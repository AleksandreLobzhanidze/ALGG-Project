<?php

require_once "db.php";
include "functions.php";

if(isset($_POST['signup'])){
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $userMail = $_POST['userMail'];
    $pwd = $_POST['pwd'];
    $pwdr = $_POST['pwd'];

    if(isEmpty_signup($firstName,$lastName,$userMail,$pwd,$pwdr) && pwdMatch($pwd,$pwdr)){
        if(userExists($userMail)){
            $conn->query("INSERT INTO login(users_pwd,users_email,first_name,last_name)VALUES('$pwd','$userMail','$firstName','$lastName')");
            header("location:signin.php?RegisterSuccessfuly");
        }else{
            header("location:reg.php?userExists");
        }
    }else{
        header("location:reg.php?error=isEmpty_OR_PwdMatch");
    }


}





?>