<?php
    // ? Revisar si ya inicio sesión
    if(!isset($_SESSION)) {
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <header class="header <?php echo $start ? 'start' : ''; ?>">
        <div class="container header-content">
            <div class="bar">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="Logotipo de bienes raices">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="Icono menu responsive">
                </div>

                <div class="right">
                    <img class="dark-mode-button" src="/build/img/dark-mode.svg" alt="boton del modo oscuro">
                    <nav class="navigation">
                        <a href="/about.php">Nosotros</a>
                        <a href="/ads.php">Anuncios</a>
                        <a href="/blog.php">Blog</a>
                        <a href="/contact.php">Contacto</a>
                        <?php if($auth): ?>
                            <a href="/sign-out.php">Cerrar Sesión</a>
                        <?php endif; ?>
                    </nav>
                </div>
            </div>

            <?php 
                if($start) {
                    echo "<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>";
                }
            ?>
        </div>
    </header>
