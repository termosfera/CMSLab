<?php

/**
 * Crea archivo de configuracion [config.php]. 
 * Devuelve false en caso de que no consiga crear el archivo.
 * 
 * @return boolean
 */
function createConfigFile($f, $c) {
    $fp = fopen($f, 'w+');
    fwrite($fp, $c);
    fclose($fp);

    if (file_exists($f)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Crea tablas necesarias para el funcionamiento del CMS.
 * En caso de no poder conectar con la base de datos o de no poder ejecutar
 * alguna consulta devolverá false.
 * 
 * @param array $connData
 * @return boolean
 */
function createTable($connData) {
    $conn = new mysqli($connData['host'], $connData['user'], $connData['pass'], $connData['name']);

    if ($conn->connect_error) {
        $result = false;
    } else {
        $result = true;
    }

    $crearTablaUsuarios = "CREATE TABLE " . $connData['pref'] . "user(
                                userId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                                username VARCHAR(25) UNIQUE NOT NULL,
                                password VARCHAR(50) NOT NULL,
                                rol INT(1) NOT NULL,
                                mainuser TINYINT,
                                email VARCHAR(50),
                                hash VARCHAR(100),
                                dni CHAR(9),
                                foto LONGBLOB,
                                lastLogin DATETIME);";

    $crearTablaRoles = "CREATE TABLE " . $connData['pref'] . "role(
                            roleId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                            roleName VARCHAR(25) NOT NULL);";

    $crearTablaArticulos = "CREATE TABLE " . $connData['pref'] . "article( 
                                articleId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                                title VARCHAR(25) NOT NULL,
                                text VARCHAR(150),
                                description VARCHAR(50),
                                foto LONGBLOB,
                                access INT NOT NULL,
                                limitDate DATETIME,
                                insertDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP  
                                ON UPDATE CURRENT_TIMESTAMP);";

    $crearTablaCategorias = "CREATE TABLE " . $connData['pref'] . "category(
                                categoryId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                                categoryName VARCHAR(25) NOT NULL,
                                father INT);";

    if ($result) {
        $conn->query($crearTablaUsuarios);        
        $conn->query($crearTablaRoles);        
        $conn->query($crearTablaArticulos);
        $conn->query($crearTablaCategorias);
    } 

    $conn->close();
    return $result;
}

?>