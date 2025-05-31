<?php

$db = mysqli_connect(
    $_ENV['DB_HOST'], 
    $_ENV['DB_USER'], 
    $_ENV['DB_PASSWORD'], 
    $_ENV['DB_DBNAME'],
    $_ENV['DB_PORT']
);

/* cambiar el conjunto de caracteres a utf8 para soporta la ñ y acentos */    
$db->set_charset("utf8");

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
