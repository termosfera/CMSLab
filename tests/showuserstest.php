<?php

echo "Test de script db<br>";
echo "prefijo: " . DB_PREF . "<br>";

$query = "INSERT INTO lc_user(username) VALUES ('pepa');";

executeQuery($query);

?>