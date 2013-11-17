<?php

/**
 * @author Juan Andres Moreno Schrott
 */

/**
 * Ejecuta consultas sql a bases de datos mysql, sin devolver
 * resultados.
 * 
 * @param string $query
 * @param array $connData
 * @return boolean $result
 */
function executeQuery($query, $connData) {
    $conn = new mysqli($connData['host'], $connData['user'], $connData['pass'], $connData['name']);

    if (!$conn->connect_error) {
        $conn->query($query);
        $result = true;
    }

    $conn->close();

    return $result;
}
?>

