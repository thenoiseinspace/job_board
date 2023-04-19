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

    if(emptyInputSignup() !==false){

    }

}
else{
    header("location: ../signup.php");
}