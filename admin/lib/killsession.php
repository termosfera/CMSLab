<?php

/**
 * Mediante este script cerraremos la session actual.
 * 
 * @author Juan Andres Moreno Schrott
 */

session_start();

unset($_SESSION['acceso']);
unset($_SESSION['usuario']);

session_destroy();

header('location:./../../index.php');
exit();

?>

