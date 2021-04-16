<?php

namespace App\Utils;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {

    /** @test */
    public function add_two_numbers()
    {
        $c = new Calculator();
        $result = $c->add(4,8);
        $this->assertEquals(12, $result);
    }

}