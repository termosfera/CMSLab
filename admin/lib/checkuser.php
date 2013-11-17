<?php

/**
 * Script para comprobar que usuario intenta acceder a un recurso.
 * 
 * @author Juan Andres Moreno Schrott
 */

function checkAdminUser() {
    session_start();

    if (empty($_SESSION['acceso']) ||
        !isset($_SESSION['acceso']) ||
        $_SESSION['acceso'] !== 1) {
            header('location:./login-form.php');
            exit();
    } 
}

function checkEditorUSer() {
    if ($_SESSION['acceso'] > 2 || !isset($_SESSION['acceso'])) {
        header('location:./login-error.php');
        exit();
    }
}

?>
