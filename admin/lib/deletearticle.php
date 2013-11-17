<?php

/**
 * Script para eliminar artículos
 * 
 * @author Juan Andres Moreno Schrott
 */

require_once dirname(dirname(__DIR__)) . '/config.php';

$articles = array();   // array para almacenar los artículos existentes
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    exit();
}

$query = "SELECT title FROM " . DB_PREF . "article LIMIT 6;";
$deleteArticleQuery = "DELETE FROM " . DB_PREF . "article WHERE title = '";

// Obtenemos los articulos existentes y los introducimos en un array.
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_row()) {
        array_push($articles, $row[0]);
    }
    $result->close();
}


for ($i = 0; $i < count($articles); $i++) {
    // Comprobamos que la variable exista.
    $checkedValue = isset($_POST[$articles[$i]]);

    if ($checkedValue) {
        // Obtenemos el valor filtrado
        $receivedTitle = filter_input(INPUT_POST, $articles[$i]);

        // Comparo el valor obtenido del POST con el valor obtenido del array
        // con los usuarios.
        if ($receivedTitle == 'on') {
            // Elimino el usuario de la base de datos.
            $conn->query($deleteArticleQuery . $articles[$i] . "';");
        }
    }
}

$conn->close();
header('location:../admin.php');
exit();
?>