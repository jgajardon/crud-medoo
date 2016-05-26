<?php


require_once 'medoo.php';

// Inicializamos medoo
$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'tu_base:de_datos',
    'server' => 'localhost', // En caso de ser remoto indicar servidor
    'username' => 'root', // Tu nombre de usuario
    'password' => 'pass', // Tu password
    'charset' => 'utf8'
]);







