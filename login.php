<?php 
    // ? conexión a DB
    require './includes/config/database.php';
    $db = connectDB();

    $errors = [];

    // ? Autenticar el usuario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = mysqli_real_escape_string($db, filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email) {
            $errors[] = "El email es obligatorio o no es válido";
        }

        if(!$password) {
            $errors[] = "El password es obligatorio";
        }

        if(empty($errors)) {
            // ? Revisar si el usuario existe
            $query = "SELECT * FROM users WHERE email = '${email}'";
            $response = mysqli_query($db, $query);

            // ? validar si hay resultados en esta consulta
            if($response->num_rows) {
                // ? Revisar si el password es correcto
                $user = mysqli_fetch_assoc($response);

                // ? Verificar si el password es correcto o no
                $auth = password_verify($password, $user['password']);

                if($auth) {
                    // ? El usuario esta autenticado

                    // * Iniciar sesión
                    session_start();

                    // * Llenar el arreglo de la sesión
                    $_SESSION['user'] = $user['email'];
                    $_SESSION['login'] = true;
                } else {
                    $errors[] = "El password es incorrecto";
                }
            } else {
                $errors[] = "El Usuario no existe";
            }
        }
    }

    // Incluye el header
    require './includes/functions.php';
    addTemplate('header');
?>

    <main class="container section content-center">
        <h1>Iniciar Sesión</h1>

        <?php foreach($errors as $error): ?>
            <div class="alert error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class="form" novalidate>
            <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input name="email" id="email" type="email" placeholder="Tu Email">

                <label for="password">Password</label>
                <input name="password" id="password" type="password" placeholder="Tu Password">
            </fieldset>

            <input type="submit" value="Iniciar Sesión" class="button green-button">
        </form>
    </main>

<?php 
    addTemplate('footer'); 
?>