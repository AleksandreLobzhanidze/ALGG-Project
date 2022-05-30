<?php

require_once "db.php";
require_once "functions.php";


if(isset($_POST['login'])){
    $user = $_POST['userMail'];
    $pwd = $_POST['pwd'];
    if(loginCheck($pwd,$user)){
        $result = $conn->query("SELECT * FROM login WHERE users_email = '$user' ");
        $result = mysqli_fetch_assoc($result);
        pwdCorrect($result['users_pwd'], $pwd);
        header("location:main.php?SignedIn!");
    }else{
        header("location:signin.php?error=invalid-USER_OR_PASWWROD");
    }
}


?>