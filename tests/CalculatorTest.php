<?php

declare(strict_types=1);

namespace Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd(): void
    {
        $this->assertSame(5, (new Calculator())->add(2, 3));
    }

   public function testMultiply(): void
   {
       $this->assertSame(6, (new Calculator())->multiply(2, 3));
   }
}