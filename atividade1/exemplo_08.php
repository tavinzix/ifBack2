<?php

include_once 'classes/Pessoa.php';
include_once 'classes/IMC.php';

echo "\nClasse statica ".IMC::toString()."\n";

$pessoa = new Pessoa("Lucia", 60, 1.55, 89);

echo "IMC da $pessoa->nome eh ". IMC::calc($pessoa) . "\n";
echo "Classificação corporal de $pessoa->nome é ".IMC::classifica($pessoa);