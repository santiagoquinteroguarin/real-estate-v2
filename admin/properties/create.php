<?php 
    // ? Base de datos
    require '../../includes/config/database.php';

    $db = connectDB();

    // * Array con mensajes de errores
    $errors = [];

    // ? Super Globales --> $_POST, $_GET, $_SERVER
    // * Ejecutar el codígo después de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $rooms = $_POST['rooms'];
        $wc = $_POST['wc'];
        $parking = $_POST['parking'];
        $sellerId = $_POST['seller'];

        if(!$title) {
            $errors[] = "Debes añadir un titulo";
        }

        if(!$price) {
            $errors[] = "El precio es Obligatorio";
        }

        if(strlen($description) < 50) {
            $errors[] = "La descripción es Obligatoria y debe tener al menos 50 caracteres";
        }

        if(!$rooms) {
            $errors[] = "El Número de habitaciones es obligatorio";
        }

        if(!$wc) {
            $errors[] = "El Número de baños es obligatorio";
        }

        if(!$parking) {
            $errors[] = "El Número de estacionamientos es obligatorio";
        }

        if(!$sellerId) {
            $errors[] = "Elige un vendedor";
        }

        // * Revisar que el arreglo de errores este vacio
        if(empty($errors)) {
            // ? Insertar en la base de datos
            $query = "INSERT INTO properties (title, price, description, rooms, wc, parking, idSeller)
            VALUES ('$title','$price','$description','$rooms','$wc','$parking','$sellerId')";

            $result = mysqli_query($db, $query);

            if($result) {
                echo 'Insertado Correctamente';
            }
        }
    }

    require '../../includes/functions.php';
    addTemplate('header');
?>

    <main class="container section">
        <h1>Crear</h1>

        <a href="/admin" class="button green-button">Volver</a>

        <?php foreach($errors as $error): ?>
            <div class="alert error">
                <?php echo $error; ?>
            </div>
        <?php endforeach ?>

        <form class="form" method="POST" action="/admin/properties/create.php">
            <fieldset>
                <legend>Información General</legend>

                <label for="title">Titulo</label>
                <input name="title" type="text" id="title" placeholder="Titulo Propiedad">

                <label for="price">Precio</label>
                <input name="price" type="number" id="price" placeholder="Precio Propiedad">
            
                <label for="image">Imagen</label>
                <input type="file" id="file" accept="image/jpeg, image/png">

                <label for="description">Descripción</label>
                <textarea name="description" id="description"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="rooms">Habitaciones:</label>
                <input name="rooms" type="number" id="rooms" placeholder="Ej: 3" min="1" max="9">

                <label for="wc">Baños:</label>
                <input name="wc" type="number" id="wc" placeholder="Ej: 3" min="1" max="9">

                <label for="parking">Estacionamiento:</label>
                <input name="parking" type="number" id="parking" placeholder="Ej: 3" min="1" max="9">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="seller" id="seller">
                    <option value="">--Seleccione--</option>
                    <option value="1">Santiago</option>
                    <option value="2">Camilo</option>
                </select>
            </fieldset>

            <input class="button green-button" type="submit" value="Crear Propiedad">

        </form>
    </main>

<?php addTemplate('footer'); ?>