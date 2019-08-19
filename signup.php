<?php
include_once 'header.php';
?>

    <section class="main-container">
        <div class="main-wrapper">
            <h2>Signup</h2>

            <form class="signup-form" action="includes/signup.inc.php" method="POST">
                <input type="text" name="user_spa" placeholder="Spa">
                <input type="password" name="user_pwd" placeholder="password">
                <button type="submit" name="submit">Sign up</button>
            </form>

        </div>
    </section>

<div class="bottom">
   <p> Ce site est réservé à l'usage exclusif des Spas Cinq Mondes en propre, franchise et management contract.<br><br><i>The website is reserved for the exclusive use of Cinq Mondes owned Spas, franchised Spas and Spas under management contract.</i></p>
</div>    

    <?php
include_once 'footer.php';
?>