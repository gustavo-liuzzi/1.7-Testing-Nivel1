<?php

declare(strict_types=1);

namespace App;


class GradeEvaluator
{
    private float $grade;

    public function __construct(float $grade)
    {
        $this->grade = $grade;
    }


    public function isPrimeraDivision(): bool
    {
        return $this->grade >= 6 && $this->grade <= 10;
    }

    public function isSegundaDivision(): bool
    {
        return $this->grade >= 4.5 && $this->grade < 6;
    }

    public function isTerceraDivision(): bool
    {
        return $this->grade >= 3.3 && $this->grade < 4.5;
    }

    public function isSuspender(): bool
    {
        return $this->grade < 3.3;
    }

    public function isNotaFueraDeRango(): bool
    {
        return $this->grade < 0 || $this->grade > 10;
    }
}
