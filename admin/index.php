<?php 
    require '../includes/functions.php';
    $auth = authStatus();

    if(!$auth) {
        header('Location: /');
    }

    // ? importar la conexión a la DB
    require '../includes/config/database.php';
    $db = connectDB();

    // ? escribir el query
    $query = "SELECT * FROM properties";

    // ? Consultar la BD
    $responseQuery = mysqli_query($db, $query);

    // ? Muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id) {
            // Elimina el archivo
            $query = "SELECT image FROM properties WHERE id = ${id}";
            $response = mysqli_query($db, $query);
            $property = mysqli_fetch_assoc($response);
            unlink('../images/' . $property['image']);

            // Elimina la propiedad
            $query = "DELETE FROM properties WHERE id = ${id}";
            $response =mysqli_query($db, $query);

            if($response) {
                header('Location: /admin?resultado=3');
            }
        }
    }

    // ? incluye un template
    addTemplate('header');
?>

    <main class="container section">
        <h1>Administrador de Bienes Raices</h1>

        <?php if(intval($resultado) === 1) : ?>
            <p class="alert successful">Anuncio Creado Correctamente</p>
        <?php elseif(intval($resultado) === 2) : ?>
            <p class="alert successful">Anuncio Actualizado Correctamente</p>
        <?php elseif(intval($resultado) === 3) : ?>
            <p class="alert successful">Anuncio Eliminado Correctamente</p>
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
                            <form method="POST" class="w-100">
                                <!-- input:hidden inputs que no son visibles -->
                                <input type="hidden" name="id" value="<?php echo $property['id']; ?>">
                                <input type="submit" class="red-button-block" value="Eliminar">
                            </form>
                            <a href="admin/properties/update.php?id=<?php echo $property['id']; ?>" class="yellow-button-block">Actualizar</a>
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
