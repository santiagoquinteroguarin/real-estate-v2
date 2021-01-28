<?php 
    require './includes/functions.php';
    addTemplate('header');
?>

    <section class="section container">
        <h2>Casas y Departamentos en Venta</h2>
            <main class="container section">
            <?php 
                $limit = 10;
                include './includes/templates/ads.php';
            ?>
            </main>
    </section>

<?php 
    addTemplate('footer'); 
?>