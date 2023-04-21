<?php
include_once 'header.php';
?>

            <section class="index-intro">
                <?php
                        if (isset($_SESSION["useruid"])){
                            echo "<p>Hello " .$_SESSION["useruid"] . "</p>"; 
                        }
                        ?>
                <h1> This is an introduction</h1>
                <p>explanitory intro paragraph</p>
            </section>

            <section class="index-categories">
                <h2>Basic Categories</h2>
                <div class="index-categories-list">
                    <div>
                        <h3>Fun stuff</h3>
                    </div>
                    <div>
                        <h3>Serious stuff</h3>
                    </div>
                    <div>
                        <h3>Exciting stuff</h3>
                    </div>
                    <div>
                        <h3>Boring stuff</h3>
                    </div>
                </div>
            </section>

<?php
include_once 'footer.php';
?>
