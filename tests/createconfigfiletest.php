<?php
echo './../installation/lib/installlib.php';
require_once './../installation/lib/installlib.php';

$result = createConfigFile('./test2.txt', "aleluya hermanoos");

echo '<br>Resultado: ' . (int)$result;
?>
