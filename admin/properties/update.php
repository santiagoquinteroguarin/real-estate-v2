<?php

    // ? Validar que sea un id valido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /admin');
    }

    // ? Base de datos
    require '../../includes/config/database.php';
    $db = connectDB();

    // ? Obtener los datos de la propiedad
    $queryProperties = "SELECT * FROM properties WHERE id = ${id}";
    $responseProperties = mysqli_query($db, $queryProperties);
    $property = mysqli_fetch_assoc($responseProperties);

    // ? Consultar para obtener los vendedores
    $querySeller = "SELECT * FROM seller";
    $response = mysqli_query($db, $querySeller);

    // * Array con mensajes de errores
    $errors = [];

    $title = $property['title'];
    $price = $property['price'];
    $description = $property['description'];
    $rooms = $property['rooms'];
    $wc = $property['wc'];
    $parking = $property['parking'];
    $sellerId = $property['idSeller'];
    $imageProperty = $property['image'];

    // ? Super Globales --> $_POST, $_GET, $_SERVER
    // * Ejecutar el codígo después de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // * mysqli_real_escape_string --> evita que ingresen comando sql que pueda afectar la base de datos
        $title = mysqli_real_escape_string($db, $_POST['title']);
        $price = mysqli_real_escape_string($db, $_POST['price']);
        $description = mysqli_real_escape_string($db, $_POST['description']);
        $rooms = mysqli_real_escape_string($db, $_POST['rooms']);
        $wc = mysqli_real_escape_string($db, $_POST['wc']);
        $parking = mysqli_real_escape_string($db, $_POST['parking']);
        $sellerId = mysqli_real_escape_string($db, $_POST['seller']);
        $create = date('Y/m/d');

        // ? asignar files a una variable
        $image = $_FILES['image'];

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

        // ? Validar por tamaño la imagen (1mb max), php solo por defecto solo deja subir archivos de max 2gb
        $medida = 1000 * 1000;

        if($image['size'] > $medida) {
            $errors[] = "La imagen es muy pesada";
        }


        // * Revisar que el arreglo de errores este vacio
        if(empty($errors)) {
            // * Crear Carpeta y validar si ya existe
            $folderImages = '../../images/';
            if(!is_dir($folderImages)) {
                mkdir($folderImages);
            }

            $imageName = '';

            // ? SUBIDA DE ARCHIVOS

            // ? validación si van a subir una nueva imagen
            if($image['name']) {
                // ? Eliminar la imagen previa
                unlink($folderImages . $property['image']);

                // * Generar un nombre único
                $imageName = md5(uniqid(rand(), true)) . ".jpg";
            
                // * move_uploaded_file --> Subir los archivos recibe 3 parametros, donde esta la imagen, donde se va guardar y el nombre del archivo
                move_uploaded_file($image['tmp_name'], $folderImages . $imageName);
            } else {
                $imageName = $property['image'];
            }

            // ? Insertar en la base de datos
            $query = "UPDATE properties 
                        SET title = '${title}', 
                            price = '${price}',
                            image = '${imageName}',
                            description = '${description}', 
                            rooms = ${rooms}, 
                            wc = ${wc}, 
                            parking = ${parking}, 
                            idSeller = ${sellerId}
                        WHERE id = ${id}";

            $result = mysqli_query($db, $query);

            if($result) {
                // * redireccionar al usuario
                header('Location: /admin?resultado=2');
            }
        }
    }

    require '../../includes/functions.php';
    addTemplate('header');
?>

    <main class="container section">
        <h1>Actualizar Propiedad</h1>

        <a href="/admin" class="button green-button">Volver</a>

        <?php foreach($errors as $error): ?>
            <div class="alert error">
                <?php echo $error; ?>
            </div>
        <?php endforeach ?>

        <!-- enctype="multipart/form-data" --- permite leer los archivos que se suban al formulario -->
        <form class="form" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>

                <label for="title">Titulo</label>
                <input value="<?php echo $title; ?>" name="title" type="text" id="title" placeholder="Titulo Propiedad">

                <label for="price">Precio</label>
                <input value="<?php echo $price; ?>" name="price" type="number" id="price" placeholder="Precio Propiedad">
            
                <label for="image">Imagen</label>
                <input name="image" type="file" id="file" accept="image/jpeg, image/png">

                <img class="image-small" src="/images/<?php echo $imageProperty; ?>" alt="">

                <label for="description">Descripción</label>
                <textarea name="description" id="description"><?php echo $description; ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="rooms">Habitaciones:</label>
                <input value="<?php echo $rooms; ?>" name="rooms" type="number" id="rooms" placeholder="Ej: 3" min="1" max="9">

                <label for="wc">Baños:</label>
                <input value="<?php echo $wc; ?>" name="wc" type="number" id="wc" placeholder="Ej: 3" min="1" max="9">

                <label for="parking">Estacionamiento:</label>
                <input value="<?php echo $parking; ?>" name="parking" type="number" id="parking" placeholder="Ej: 3" min="1" max="9">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="seller" id="seller" value="<?php echo $sellerId; ?>">
                    <option value="">--Seleccione--</option>
                    <?php while($row = mysqli_fetch_assoc($response)) : ?>
                        <option <?php echo $sellerId === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name'] . " " . $row['lastname']; ?></option>
                    <?php endwhile ?>
                </select>
            </fieldset>

            <input class="button green-button" type="submit" value="Actualizar Propiedad">

        </form>
    </main>

<?php addTemplate('footer'); ?>