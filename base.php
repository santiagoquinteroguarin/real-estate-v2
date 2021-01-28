<?php 

    // ? Validar id
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /');
    }

    // ? conexión a DB
    require './includes/config/database.php';
    $db = connectDB();

    // ? Consulta
    $query = "SELECT * FROM properties WHERE id = ${id}";
    $response = mysqli_query($db, $query);
    
    if(!$response -> num_rows) {
        header('Location: /');
    }

    $property = mysqli_fetch_assoc($response);

    require './includes/functions.php';
    addTemplate('header');
?>

    <main class="container section content-center">
        <h1><?php echo $property['title']; ?></h1>

        <img loading="lazy" src="/images/<?php echo $property['image']; ?>" alt="Imagen Anuncio">

        <div class="summary-property">
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

            <p><?php echo $property['description']; ?></p>

        </div>
    </main>

<?php 
    // ? Cerrar la conexión a la DB
    mysqli_close($db);
    addTemplate('footer'); 
?>