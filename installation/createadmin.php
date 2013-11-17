<?php

/**
 * Este archivo recibirá el contenido introducido en el formulario
 * en el que se introducen los datos para el usuario administrador.
 * Si el usuario administrador se crea correctamente nos redireccionará
 * al login a través del cual acceder al panel de administración.
 * 
 * Copyright (c) 2013.
 *
 * @author Juan Andres Moreno Schrott
 */
require_once(dirname(__DIR__) . '/config.php');
require_once(DB_PATH . '/db.php');

$adminData = array(
    'user_name' => filter_input(INPUT_POST, 'user_name'),
    'password' => filter_input(INPUT_POST, 'password'),
    'email' => filter_input(INPUT_POST, 'email'));

$connData = array(
    'host' => DB_HOST,
    'user' => DB_USER,
    'pass' => DB_PASS,
    'name' => DB_NAME,
    'pref' => DB_PREF);

$query = "INSERT INTO {$connData['pref']}user(username, password, rol, mainuser, email)
            VALUES('" . $adminData['user_name'] . "', '" . md5($adminData['password']) . "',1 ,1 , '" . $adminData['email'] . "');";

if (executeQuery($query, $connData)) {
    header('location:../admin/login-form.php');
    exit();
} else {
    header('location:/createadminerror.php');
    exit();
}
?>
