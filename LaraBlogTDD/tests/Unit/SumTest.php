<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
}


describe('sum', function () {
    it('may sum integers', function () {
        $result = sum(1, 2);
  
        expect($result)->toBe(3);
     });
  
     it('may sum floats', function () {
        $result = sum(1.5, 2.5);
  
        expect($result)->toBe(4);
     });
 });