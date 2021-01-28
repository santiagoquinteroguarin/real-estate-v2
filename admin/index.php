<?php 

    $resultado = $_GET['resultado'] ?? null;
    require '../includes/functions.php';
    addTemplate('header');
?>

    <main class="container section">
        <h1>Administrador de Bienes Raices</h1>
        <?php if(intval($resultado) === 1) : ?>
            <p class="alert successful">Anuncio creado correctamente</p>
        <?php endif ?>

        <a href="/admin/properties/create.php" class="button green-button">Nueva Propiedad</a>
    </main>

<?php addTemplate('footer'); ?>
