<?php

function conectarDB() : mysqli{
    $db = new mysqli('localhost', 'root', 'Cris +83112416', 'bienesraices_crud'); //Cambiar la base de datos a IPUI SANTA ANA

    if (!$db) {
        echo "Error no se pudo conectar";
        exit;
    }

    return $db;
}
