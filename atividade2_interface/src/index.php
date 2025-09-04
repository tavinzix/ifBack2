<?php

require "../vendor/autoload.php";

use Gvg\Dbe2\classes\Atleta;
use Gvg\Dbe2\classes\logs\Relatorio;
use Gvg\Dbe2\classes\Medico;

$atl1 = new Atleta("Luizito Soares", 36, 1.8, 80, 25, 3);
$med1 = new Medico("Pualo Paixão", 122343, "Fisioterapeuta", 60, 1.8, 90);

echo "<hr>";//---
echo "<pre>";
$atl1->showImc();

var_dump($atl1);

$relatorio = new Relatorio;

$relatorio->add($atl1);
$relatorio->add($med1);

$relatorio->imprime();


// $class = Funcionario::class;

// if ($atl1 instanceof $class)
//     echo "\n\n\t $atl1->nome é um instância de $class";

// echo "\n";

// require "slugfy.php";

// require "exemplo_abstract_class.php";