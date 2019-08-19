<?php
include_once 'header.php';
?>

    <section class="main-container">
        <div class="main-wrapper">
            <h2>Cinq Mondes Spa Report</h2>

            <?php
                if (isset($_SESSION['u_id'])) {
                include_once 'reporting.php';
                }
            ?>

        </div>
    </section>

<?php
include_once 'footer.php';
?>

<div class="bottom">
   <p> Ce site est réservé à l'usage exclusif des Spas Cinq Mondes en propre, franchise et management contract.<br><br><i>The website is reserved for the exclusive use of Cinq Mondes owned Spas, franchised Spas and Spas under management contract.</i></p>
</div>    
    