<?php 
    // ? importar la conexión a la DB
    require '../includes/config/database.php';
    $db = connectDB();

    // ? escribir el query
    $query = "SELECT * FROM properties";

    // ? Consultar la BD
    $responseQuery = mysqli_query($db, $query);

    // ? Muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;
    // ? incluye un template
    require '../includes/functions.php';
    addTemplate('header');
?>

    <main class="container section">
        <h1>Administrador de Bienes Raices</h1>
        <?php if(intval($resultado) === 1) : ?>
            <p class="alert successful">Anuncio creado correctamente</p>
        <?php endif ?>

        <a href="/admin/properties/create.php" class="button green-button">Nueva Propiedad</a>
        
        <table class="properties">
            <thead>
                <th>Id</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </thead>

            <!-- Mostrar los resultados -->
            <tbody>
                <?php while($property = mysqli_fetch_assoc($responseQuery)) : ?>
                    <tr>
                        <td><?php echo $property['id']; ?></td>
                        <td><?php echo $property['title']; ?></td>
                        <td><img class="table-image" src="/images/<?php echo $property['image']; ?>" alt="Imagen casa en la playa"></td>
                        <td>$ <?php echo $property['price']; ?></td>
                        <td>
                            <a href="#" class="red-button-block">Eliminar</a>
                            <a href="#" class="yellow-button-block">Actualizar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php 
    // ? Cerrar la conexión a la DB
    mysqli_close($db);

    addTemplate('footer'); 
?>
