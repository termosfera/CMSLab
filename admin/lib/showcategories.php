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
function getCategories($db_host, $db_user, $db_pass, $db_name, $db_prefix) {
    $categoriesList = array();
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        exit();
    }

    $query = "SELECT categoryName FROM {$db_prefix}category LIMIT 6";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_row()) {
            array_push($categoriesList, $row[0]);
        }
        $result->close();
    }

    // cerrar la conexión
    $conn->close();

    return $categoriesList;
}

/**
 * 
 * @param type $categoriesList
 */
function showCategories($categoriesList) {
    if ($categoriesList != null) {

        for ($i = 0; $i < count($categoriesList); $i++) {
            echo "<br><input class='selected_category' type='checkbox' name='" . $categoriesList[$i] . "'>";
            echo "<h4>" . $categoriesList[$i] . "</h4>";
        }
    }
}

?>

