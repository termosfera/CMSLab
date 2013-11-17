<?php

/**
 * Script para crear categorias.
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

$category = filter_input(INPUT_POST, 'category');

$query = "INSERT INTO " . DB_PREF . "category(categoryName) VALUES('{$category}');";

if (executeQuery($query, $connData)) {
    header('location:../admin.php');
    exit();
}
?>
