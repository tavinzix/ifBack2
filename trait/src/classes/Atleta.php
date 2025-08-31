<?php

namespace otavio\trait\src\classes;

require_once __DIR__ . "/Imc.php";

class Atleta
{
    use CalculoIMC;
    function __construct(
        public String $nome,
        public int $idade,
        public float $altura = 0,
        public float $peso = 0
    ) {}
}
$atleta = new Atleta("Ana", 23, 1.68, 30);

echo "IMC: " . $atleta->calc() . "\n" ;
echo "Classificação: " . $atleta->classifica() . "\n";
echo "Situação: ".$atleta->isNormal();