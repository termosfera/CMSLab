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
function getArticlesTitles($db_host, $db_user, $db_pass, $db_name, $db_prefix) {
    $articlesTitlesList = array();
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        exit();
    }

    $query = "SELECT title FROM {$db_prefix}article LIMIT 6";
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_row()) {
            array_push($articlesTitlesList, $row[0]);
        }
        $result->close();
    }

    // cerrar la conexión
    $conn->close();

    return $articlesTitlesList;
}

/**
 * 
 * @param type $articlesTitlesList
 */
function showArticlesTitles($articlesTitlesList) {
    if ($articlesTitlesList != null) {

        for ($i = 0; $i < count($articlesTitlesList); $i++) {
            echo "<br><input class='selected' type='checkbox' name='" . $articlesTitlesList[$i] . "'>";
            echo "<h4>" . $articlesTitlesList[$i] . "</h4>";
        }
    }
}

?>
