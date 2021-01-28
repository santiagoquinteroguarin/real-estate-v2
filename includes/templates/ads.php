<?php 
    // ? conexión a DB
    require __DIR__ . '/../config/database.php';
    $db = connectDB();

    // ? Consulta
    $query = "SELECT * FROM properties LIMIT ${limit}";
    $response = mysqli_query($db, $query);
?>

<div class="ads-container">
    <?php while($property = mysqli_fetch_assoc($response)) : ?>
        <div class="ad">
            
            <img loading="lazy" src="/images/<?php echo $property['image']; ?>" alt="Imagen Anuncio">

            <div class="contenido-anuncio">
                <h3><?php echo $property['title']; ?></h3>
                <p><?php echo $property['description']; ?></p>
                <p class="price">$ <?php echo $property['price']; ?></p>

                <ul class="icons-characteristics">
                    <li>
                        <img class="icon" src="./build/img/icono_wc.svg" alt="Icono WC">
                        <p><?php echo $property['wc']; ?></p>
                    </li>
                    <li>
                        <img class="icon" src="./build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                        <p><?php echo $property['parking']; ?></p>
                    </li>
                    <li>
                        <img class="icon" src="./build/img/icono_dormitorio.svg" alt="Icono dormitorio">
                        <p><?php echo $property['rooms']; ?></p>
                    </li>
                </ul>
                <a href="./base.php?id=<?php echo $property['id']; ?>" class="button yellow-button">
                    Ver Propiedad
                </a>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php 
    // ? Cerrar la conexión a la DB
    mysqli_close($db);
?>
