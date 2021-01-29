<?php

require 'app.php';

function addTemplate(string $name, bool $start = false) {
    include TEMPLATES_URL . "/${name}.php";
}

function authStatus() : bool {
    // * Autenticación
    session_start();

    $auth = $_SESSION['login'];

    if($auth) {
        return true;
    }

    return false;
}