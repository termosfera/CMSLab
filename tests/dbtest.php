<?php
/*
require('../config.php');
echo  '../config.php';
require(DB_PATH . '/db.php');
echo '<br>' . DB_PATH . '/db.php';
require INSTALLATION_LIB_PATH . '/installlib.php';
echo '<br>' . INSTALLATION_LIB_PATH . '/installlib.php';

$sql = "INSERT INTO lc_user(username) VALUES('manuela');";
$connection = array(
    'host' => DB_HOST,
    'user' => DB_USER,
    'pass' => DB_PASS,
    'name' => DB_NAME
);

foreach ($connection as $key => $value) {
    echo '<br>' . $value;
}

if (executeQuery($sql, $connection)) {
    echo "<br>ok";
} else {
    echo "<br>fail";
}
 * */
require_once dirname(__DIR__) . '/config.php';

$users = array();   // array para almacenar los usuarios existentes
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    echo "error al conectar";
    exit();
} 

$query = "SELECT username, mainuser FROM " . DB_PREF . "user LIMIT 6;";

// Obtenemos los usuarios existentes y los introducimos en un array.
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_row()) {
        echo $row[0] . '<br>' . $row[1] . '<br>' . $row[2];
    }
    $result->close();
}
$conn->close();
?>

