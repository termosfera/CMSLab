<?php

include './../installation/config.php';
include './../installation/lib/createexampleslib.php';

echo "Probando insertExampleData()<br>";

echo DB_HOST . "<br>" . DB_NAME . "<br>" . DB_PASS . "<br>" . DB_USER . "<br>" . DB_PREF;

$result = insertExampleData(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PREF);

if($result) {
    echo "datos insertados correctamente" . var_dump($result);
} else {
    echo "error" . var_dump($result);
}
?>