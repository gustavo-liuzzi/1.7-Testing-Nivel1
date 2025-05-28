<?php

use PHPUnit\Framework\TestCase;
use App\Grade;

class GradeTest extends TestCase
{
    public function testClasificadorDeNotas()
    {
        $receivedGrade = new Grade(6);
        $this->assertEquals(1, $receivedGrade->clasificadorDeNotas());

        $receivedGrade = new Grade(4.5);
        $this->assertEquals(2, $receivedGrade->clasificadorDeNotas());

        $receivedGrade = new Grade(3.3);
        $this->assertEquals(3, $receivedGrade->clasificadorDeNotas());

        $receivedGrade = new Grade(3.2);
        $this->assertEquals(0, $receivedGrade->clasificadorDeNotas());

        $receivedGrade = new Grade(-8);
        $this->assertEquals(99, $receivedGrade->clasificadorDeNotas());

        $receivedGrade = new Grade(10.1);
        $this->assertEquals(99, $receivedGrade->clasificadorDeNotas());
    }

    public function testConversorDeNotas()
    {
        $receivedGrade = new Grade(6);
        $codigo = $receivedGrade->clasificadorDeNotas();
        $this->assertEquals('Primera División', $receivedGrade->conversorDeNotas($codigo));

        $receivedGrade = new Grade(4.5);
        $codigo = $receivedGrade->clasificadorDeNotas();
        $this->assertEquals('Segunda División', $receivedGrade->conversorDeNotas($codigo));

        $receivedGrade = new Grade(3.3);
        $codigo = $receivedGrade->clasificadorDeNotas();
        $this->assertEquals('Tercera División', $receivedGrade->conversorDeNotas($codigo));

        $receivedGrade = new Grade(3.2);
        $codigo = $receivedGrade->clasificadorDeNotas();
        $this->assertEquals('El estudiante suspenderá', $receivedGrade->conversorDeNotas($codigo));

        $receivedGrade = new Grade(-8);
        $codigo = $receivedGrade->clasificadorDeNotas();
        $this->assertEquals('Nota inválida', $receivedGrade->conversorDeNotas($codigo));

        $receivedGrade = new Grade(10.1);
        $codigo = $receivedGrade->clasificadorDeNotas();
        $this->assertEquals('Nota inválida', $receivedGrade->conversorDeNotas($codigo));
    }
}
