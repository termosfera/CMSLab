<?php

require_once dirname(dirname(__DIR__)) . '/config.php';
require_once DB_PATH . '/db.php';

$connData = array(
    'host' => DB_HOST,
    'name' => DB_NAME,
    'user' => DB_USER,
    'pass' => DB_PASS,
    'pref' => DB_PREF);

$example1 = "INSERT INTO " . DB_PREF . "article(title, text, access, limitDate) VALUES(
        'Articulo de prueba 1', 'Primer articulo de prueba. Acceso administrador', 1, '2014-01-01 00:00:00');";

$example2 = "INSERT INTO " . DB_PREF . "article(title, text, access, limitDate) VALUES(
        'Articulo de prueba 2', 'Segundo articulo de prueba. Acceso editor', 2, '2014-01-01 00:00:00');";

$example3 = "INSERT INTO " . DB_PREF . "article(title, text, access, limitDate) VALUES(
        'Articulo de prueba 3', 'Tercer articulo de prueba. Acceso usuario', 3, '2014-01-01 00:00:00');";

$example4 = "INSERT INTO " . DB_PREF . "article(title, text, access, limitDate) VALUES(
        'Articulo de prueba 4', 'Cuarto articulo de prueba. Acceso usuario', 3, '2014-01-01 00:00:00');";

$example5 = "INSERT INTO " . DB_PREF . "article(title, text, access, limitDate) VALUES(
        'Articulo de prueba 5', 'Quinto articulo de prueba. Acceso usuario', 3, '2014-01-01 00:00:00');";

$result = executeQuery($example1, $connData);
$result = executeQuery($example2, $connData);
$result = executeQuery($example3, $connData);
$result = executeQuery($example4, $connData);
$result = executeQuery($example5, $connData);

if ($result) {
    header('location:../admin.php');
    exit();
}

?>