<?php
include_once "Pessoa.php";

class IMC
{

    public static function toString()
    {
        return self::class; //$this
    }

    public static function calc(Pessoa $objPessoa)
    {
        return $objPessoa->peso / $objPessoa->altura ** 2;
    }

    public static function classifica(Pessoa $objPessoa) : string
    {
        $imc = self::calc($objPessoa);

        if ($imc < 18.5) {
            return "Abaixo do peso";
           
        } elseif (($imc >= 18.5) && ($imc < 24.9)) {
            return "Saudavel";
        } elseif (($imc >= 25) && ($imc < 29.9)) {
            return "Sobrepeso";
        } else {
           return "Obesidade";
        }
    }
}
