<?php

/**
 * @author Juan Andres Moreno Schrott
 */

/**
 * 
 * @param type $db_host
 * @param type $db_user
 * @param type $db_pass
 * @param type $db_name
 * @param type $db_prefix
 * @return array
 */
function getUsers($db_host, $db_user, $db_pass, $db_name, $db_prefix) {
    $usersList = array();
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        exit();
    }

    $query = "SELECT username FROM {$db_prefix}user LIMIT 6";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_row()) {
            array_push($usersList, $row[0]);
        }
        $result->close();
    }

    // cerrar la conexión
    $conn->close();

    return $usersList;
}

/**
 * 
 * @param type $usersList
 */
function showUsers($usersList) {
    if ($usersList != null) {

        for ($i = 0; $i < count($usersList); $i++) {
            echo "<br><input class='selected' type='checkbox' name='" . $usersList[$i] . "'>";
            echo "<h4>" . $usersList[$i] . "</h4>";
        }
    }
}

?>