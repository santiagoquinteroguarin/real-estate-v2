<?php

function connectDB() : mysqli {
    $db = mysqli_connect('localhost','root','','real_estate');

    if(!$db) {
        echo 'Error no se pudo conectar';
        exit;
    }

    return $db;
}
