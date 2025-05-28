<?php

use PHPUnit\Framework\TestCase;
use App\GradeEvaluator;

class GradeEvaluatorTest extends TestCase {
    public function testIsPrimeraDivision() {
        $evaluator = new GradeEvaluator(9);
        $this->assertTrue($evaluator->isPrimeraDivision());

        $evaluator = new GradeEvaluator(1);
        $this->assertFalse($evaluator->isPrimeraDivision());

        $evaluator = new GradeEvaluator(6);
        $this->assertTrue($evaluator->isPrimeraDivision());
    }

    public function testIsSegundaDivision() {
        $evaluator = new GradeEvaluator(5);
        $this->assertTrue($evaluator->isSegundaDivision());

        $evaluator = new GradeEvaluator(4.5);
        $this->assertTrue($evaluator->isSegundaDivision());

        $evaluator = new GradeEvaluator(4.4);
        $this->assertFalse($evaluator->isSegundaDivision());
    }

    public function testIsTerceraDivision() {
        $evaluator = new GradeEvaluator(3.5);
        $this->assertTrue($evaluator->isTerceraDivision());

        $evaluator = new GradeEvaluator(3.3);
        $this->assertTrue($evaluator->isTerceraDivision());

        $evaluator = new GradeEvaluator(3.2);
        $this->assertFalse($evaluator->isTerceraDivision());
       
    }

    public function testIsSuspender() {
        $evaluator = new GradeEvaluator(2);
        $this->assertTrue($evaluator->isSuspender());

        $evaluator = new GradeEvaluator(3.3);
        $this->assertFalse($evaluator->isSuspender());
    }

    public function testIsNotaFueraDeRango() {
        $evaluator = new GradeEvaluator(11);
        $this->assertTrue($evaluator->isNotaFueraDeRango());

        $evaluator = new GradeEvaluator(-1);
        $this->assertTrue($evaluator->isNotaFueraDeRango());

        $evaluator = new GradeEvaluator(5);
        $this->assertFalse($evaluator->isNotaFueraDeRango());
    }


}

