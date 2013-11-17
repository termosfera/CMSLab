<?php

/**
 * Script para crear artículos.
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

$title = filter_input(INPUT_POST, 'titulo');
$text = filter_input(INPUT_POST, 'articulo');

$query = "INSERT INTO " . DB_PREF . "article(title, text) VALUES('{$title}', '{$text}');";

if (executeQuery($query, $connData)) {
    header('location:../admin.php');
    exit();
}
?>

