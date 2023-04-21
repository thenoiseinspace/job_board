<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Job Boards</title>
        <!-- <link href=""> font -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    
        <nav>
            <div class="wrapper">
                <!-- <a href="index.php"> <img src="img/logo-white.png" alt="blog logo"></a> -->
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="discover.php">About</a></li>
                    <li><a href="blog.php">Find blogs</a></li>
                    <?php
                        if (isset($_SESSION["useruid"])){
                            echo "<li><a href='profile.php'>Profile</a></li>"; 
                            echo "<li><a href='logout.php'>Log out</a></li>";
                        }
                        else {
                           echo "<li><a href='signup.php'>Sign up</a></li>";
                           echo "<li><a href='login.php'>Log in</a></li>";  
                        }
                    ?>
                </ul>
            </div>
        </nav>

        <div class="wrapper">