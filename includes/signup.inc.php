<?php

// this checks to make sure the user got the the signup form the right way
if(isset($_POST["submit"])){
    // echo "it works"; 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php'; 
    require_once 'functions.inc.php'; 

    if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !==false){
        header("location: ../signup.php?error=emptyinput");
        exit(); 
    }
    if(invalidUid($username) !==false){
        header("location: ../signup.php?error=invaliduid");
        exit(); 
    }
    if(invalidEmail($email) !==false){
        header("location: ../signup.php?error=invalidemail");
        exit(); 
    }
    if(pwdMatch($pwd, $pwdRepeat) !==false){
        header("location: ../signup.php?error=pwdmismatch");
        exit(); 
    }
    if(uidExists($conn, $username, $email) !==false){
        header("location: ../signup.php?error=usernametaken");
        exit(); 
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else{
    header("location: ../signup.php");
    exit();
}