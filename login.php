<?php
include_once 'header.php';
?>

            <section class="signup-form">
                <h2>Log in</h2>
                <div class="signup-form-form">
                <form action="includes/login.inc.php" method="post"> 
                    <input type="text" name="uid" placeholder="Username or email...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="submit">Log in</button>
                </form>
                </div>
            </section>



<?php
include_once 'footer.php';
?>
