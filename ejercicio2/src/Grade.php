<?php

declare(strict_types=1);

namespace App;


class Grade
{
    private float $grade;

    public function __construct(float $grade)
    {
        $this->grade = $grade;
    }


    public function clasificadorDeNotas(): int
    {
        if ($this->grade < 0 || $this->grade > 10) {
            return 99;
        } elseif ($this->grade >= 6) {
            return 1;
        } elseif ($this->grade >= 4.5) {
            return 2;
        } elseif ($this->grade >= 3.3) {
            return 3;
        } else {
            return 0;
        }
    }

    public function conversorDeNotas(int $codigo): string
    {
        switch ($codigo) {
            case 1:
                return 'Primera División';
            case 2:
                return 'Segunda División';
            case 3:
                return 'Tercera División';
            case 0:
                return 'El estudiante suspenderá';
            case 99:
                return 'Nota inválida';
            default:
                return 'Código desconocido';
        }
    }
}
