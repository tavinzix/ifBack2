<?php

namespace otavio\trait\src\Classes;

trait CalculoIMC
{
    public function calc(): float
    {
        if (!is_numeric($this->altura) || !is_numeric($this->peso) || $this->altura == 0 || $this->peso == 0) {
            echo "\nIMC {$this->nome}: Digite um peso e altura válido\n";
            return 0;
        }

        return $this->peso / ($this->altura ** 2);
    }

    public function classifica(): string
    {
        $imc = $this->calc();

        if ($imc <= 18.5) {
            return 'Abaixo do peso';
        }
        if ($imc <= 24.9) {
            return 'Saudável';
        }
        if ($imc < 29.9) {
            return 'Sobrepeso';
        }
        return 'Obesidade';
    }

    function isNormal()
    {
        $imc = $this->calc();
        if ($this->idade >= 19 && $this->idade <= 24) {
            if ($imc >= 19 && $imc <= 23) {
                return "normal";
            } else {
                return "nao normal";
            }
        } elseif ($this->idade >= 25 && $this->idade <= 34) {
            if ($imc >= 20 && $imc <= 25) {
                return "normal";
            } else {
                return "nao normal";
            }
        } elseif ($this->idade >= 35 && $this->idade <= 44) {
            if ($imc >= 21 && $imc <= 26) {
                return "normal";
            } else {
                return "nao normal";
            }
        } elseif ($this->idade >= 45 && $this->idade <= 54) {
            if ($imc >= 22 && $imc <= 27) {
                return "normal";
            } else {
                return "nao normal";
            }
        } elseif ($this->idade >= 55 && $this->idade <= 64) {
            if ($imc >= 23 && $imc <= 28) {
                return "normal";
            } else {
                return "nao normal";
            }
        } elseif ($this->idade >= 65) {
            if ($imc >= 24 && $imc <= 29) {
                return "normal";
            } else {
                return "nao normal";
            }
        }
    }
}
