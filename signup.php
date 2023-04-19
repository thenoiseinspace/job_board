<?php
include_once 'header.php';
?>

            <section class="signup-form">
                <h2>Sign Up</h2>
                <div class="signup-form-form">
                <form action="includes/signup.inc.php" method="post"> 
                    <input type="text" name="name" placeholder="Full name...">
                    <input type="text" name="email" placeholder="Email...">
                    <input type="text" name="uid" placeholder="Username...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <input type="password" name="pwdrepeat" placeholder="Confirm password...">
                    <button type="submit" name="submit">Sign up</button>
                </form>
                </div>
                <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p>Please fill in all fields</p>";
                    }
                    else if ($_GET["error"] == "invaliduid"){
                        echo "<p>Choose a different username </p>";
                    }
                    else if ($_GET["error"] == "invalidemail"){
                        echo "<p>Choose a proper email </p>";
                    }
                    else if ($_GET["error"] == "pwdmismatch"){
                        echo "<p>Passwords don't match </p>";
                    }
                    else if ($_GET["error"] == "stmtfailed"){
                        echo "<p>Something went wrong. Please try again </p>";
                    }
                    else if ($_GET["error"] == "usernametaken"){
                        echo "<p>Choose a different username </p>";
                    }
                    else if ($_GET["error"] == "none"){
                        echo "<p>Thank you for signing up </p>";
                    }
                }   
            ?>
            </section>




<?php
include_once 'footer.php';
?>
