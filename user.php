<?php 

// ? Importar la Conexión
require './includes/config/database.php';
$db = connectDB();

// ? Crear un email y password
$email = "correo@correo.com";
$password = "123456";

// ? generar hash recibe dos parametros la contraseña que se va tratar y otro es el metodo PASSWORD_DEFAULT o PASSWORD_BCRIPT
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// ? Query para crear el usuario
$query = "INSERT INTO users (email, password) VALUES ('${email}','${passwordHash}');";

// ? Agregarlo a la base de datos
mysqli_query($db, $query);