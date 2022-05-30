<?php

function isEmpty_signup($firstName,$lastName,$userMail,$pwd,$pwdr){
    if(empty($firstName) || empty($lastName) || empty($userMail) || empty($pwd) || empty($pwdr)){
        return false;
    } else{
        return true;
    }
}

function pwdMatch($pwd, $pwdr){
    if($pwd != $pwdr){
        return false;
    }else if($pwd == $pwdr){
        return true;
    }
}

function userExists($userMail){
    $conn = mysqli_connect('localhost','root','','loginsystem');
    $row = $conn->query("SELECT * FROM login WHERE users_email = '$userMail'");
    $select = mysqli_num_rows($row);
    if($select > 0){
        return false;
    }else{
        return true;
    }
}

function pwdCorrect($pwd, $enteredpwd){
    if($enteredpwd==$pwd){
        header("location:signin.php?error=NoneSignedIn");
    }
}

function loginCheck($pwd,$user){
    $bool = false;
    $conn = mysqli_connect("localhost","root","","loginsystem");
    $row = $conn->query("SELECT * FROM login WHERE users_email = '$user'");
    $row = mysqli_fetch_assoc($row);
    if($pwd === $row['users_pwd']){
        $bool = true;
    }
    return $bool;
}