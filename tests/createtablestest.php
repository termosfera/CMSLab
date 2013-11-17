<?php
require './../config.php';
echo "hola? " . DB_HOST . " " . DB_USER . " " . DB_PASS . " " . DB_NAME . " " . DB_PREF;
require './../installation/lib/installlib.php';
echo "archivo importado ok";

createTable(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PREF);

if ($result == FALSE) {
    echo "problems...";
} else {
    echo "en principio parece que va bien...";
}

?>

