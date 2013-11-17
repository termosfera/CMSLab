<?php

/**
 * Script para eliminar usuarios
 * 
 * @author Juan Andres Moreno Schrott
 */

require_once dirname(dirname(__DIR__)) . '/config.php';

$users = array();   // array para almacenar los usuarios existentes
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    exit();
}

$query = "SELECT username, mainuser FROM " . DB_PREF . "user LIMIT 6;";
$deleteUserQuery = "DELETE FROM " . DB_PREF . "user WHERE username = '";

// Obtenemos los usuarios existentes y los introducimos en un array.
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_row()) {
        if ($row[1] != 1) {
            array_push($users, $row[0]);
        }
    }
    $result->close();
}


for ($i = 0; $i < count($users); $i++) {
    // Comprobamos que la variable exista.
    $checkedValue = isset($_POST[$users[$i]]);

    if ($checkedValue) {
        // Obtenemos el valor filtrado
        $receivedName = filter_input(INPUT_POST, $users[$i]);

        // Comparo el valor obtenido del POST con el valor obtenido del array
        // con los usuarios.
        if ($receivedName == 'on') {
            // Elimino el usuario de la base de datos.
            $conn->query($deleteUserQuery . $users[$i] . "';");
        }
    }
}

$conn->close();
header('location:../admin.php');
exit();
?>