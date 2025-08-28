<?php
require "../vendor/autoload.php";
echo "<pre>";

use Otavio\Composer\classes\Atleta;
use Otavio\Composer\classes\Medico;
use Illuminate\Support\Str;

$atl2 = new Atleta("Pedro Geromel", 36, 1.83, 75);
$med1 = new Medico("Pualo Paixão", 122343, "Fisioterapeuta");

$list = [$atl2, $med1];

print_r(
    array_map(
        fn($p) => Str::camel($p->nome),
        $list
    )
);
