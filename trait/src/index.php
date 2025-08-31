<?php

require "../vendor/autoload.php";

use otavio\trait\src\classes\Atleta;

$atl1 = new Atleta("Luizito Soares", 36, 1.8, 80);

echo "<hr>";
var_dump($atl1);