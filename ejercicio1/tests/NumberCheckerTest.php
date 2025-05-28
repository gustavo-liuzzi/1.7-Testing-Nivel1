<?php

use PHPUnit\Framework\TestCase;
use App\NumberChecker;

class NumberCheckerTest extends TestCase {

    public function testIsEven() {
        $checker = new NumberChecker(4);
        $this->assertTrue($checker->isEven());
        
        $checker = new NumberChecker(5);
        $this->assertFalse($checker->isEven());

        $checker = new NumberChecker(0);
        $this->assertTrue($checker->isEven());

        $checker = new NumberChecker(-2);
        $this->assertTrue($checker->isEven());

        $checker = new NumberChecker(-3);
        $this->assertFalse($checker->isEven());

    }

    public function testIsPositive() {
        $checker = new NumberChecker(3);
        $this->assertTrue($checker->isPositive());
        
        $checker = new NumberChecker(-1);
        $this->assertFalse($checker->isPositive());

        $checker = new NumberChecker(0);
        $this->assertFalse($checker->isPositive());
        
    }
}


