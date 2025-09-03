<?php

namespace otavio\trait\Classes;

require_once __DIR__ . "/Imc.php";

class Pessoa
{
	use CalculoIMC;
	protected $imc;

	function __construct(
		public String $nome,
		public int $idade,
		public float $altura = 0,
		public float $peso = 0
	) {}
}

$pessoa = new Pessoa("Ana", 30, 1.68, 60);
echo "Nome: " . $pessoa->nome . PHP_EOL;
echo "IMC: " . $pessoa->calc() . PHP_EOL;
echo "Classificação: " . $pessoa->classifica() . PHP_EOL;
