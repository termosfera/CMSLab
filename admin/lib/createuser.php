<?php

/**
 * Script para crear usuarios
 * 
 * @author Juan Andres Moreno Schrott
 */

require_once dirname(dirname(__DIR__)) . '/config.php';
require_once DB_PATH . '/db.php';

$connData = array(
    'host' => DB_HOST,
    'name' => DB_NAME,
    'user' => DB_USER,
    'pass' => DB_PASS,
    'pref' => DB_PREF);

$user_name = filter_input(INPUT_POST, 'user_name');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');
$rol = filter_input(INPUT_POST, 'rol');

$query = "INSERT INTO " . DB_PREF . "user(username, password, rol, email, mainuser) VALUES(
        '{$user_name}', MD5('{$password}'), {$rol}, '{$email}', 0);";

if (executeQuery($query, $connData)) {
    header('location:../admin.php');
    exit();
}

?>

