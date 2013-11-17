<?php

/**
 * Este archivo recibirá el contenido introducido en el formulario
 * de instalación. Preferiria optar por utilizar orientación a objetos
 * y gestionar los errores con excepciones, lo que se deja para modificación
 * en un futuro.
 * En caso de crear con éxito el archivo de configuración, pasa a
 * crear las tablas necesarias para el funcionamiento de el CMS.
 * Este archivo nos redirecciona al formulario para crear el usuario 
 * administrador si las anteriores operaciones han sido realizadas con éxito.
 * 
 * @author Juan Andres Moreno Schrott
 */
require_once('./lib/installlib.php');

$configData = array(
    'host' => filter_input(INPUT_POST, 'host'),
    'name' => filter_input(INPUT_POST, 'name'),
    'user' => filter_input(INPUT_POST, 'user'),
    'pass' => filter_input(INPUT_POST, 'pass'),
    'pref' => filter_input(INPUT_POST, 'pref'));


$file_content = '<?php' . "\n" .
        "define('DB_HOST', '" . $configData['host'] . "');" . "\n" .
        "define('DB_NAME', '" . $configData['name'] . "');" . "\n" .
        "define('DB_USER', '" . $configData['user'] . "');" . "\n" .
        "define('DB_PASS', '" . $configData['pass'] . "');" . "\n" .
        "define('DB_PREF', '" . $configData['pref'] . "');" . "\n" .
        "define('ROOT_PATH', '" . dirname(__DIR__) . "');" . "\n" .
        "define('DB_PATH', ROOT_PATH . '/db');" . "\n" .
        "define('ADMIN_PATH', ROOT_PATH . '/admin');" . "\n" .
        "define('ADMIN_LIB_PATH', ADMIN_PATH . '/lib');" . "\n" .
        "define('INSTALLATION_PATH', ROOT_PATH . '/installation');" . "\n" .
        "define('INSTALLATION_LIB_PATH', INSTALLATION_PATH . '/lib');" . "\n" .
        '?>';

$file = dirname(__DIR__) . '/config.php';

if (createConfigFile($file, $file_content)) {

    if (createTable($configData)) {
        header('location:./createadmin-form.php');
        exit();
    } else {
        header('location:./install-error.php');
        exit();
    }
} else {
    header('location:./install-error.php');
    exit();
}
?>

