<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    
}
it('has home', function () {
    echo get_class($this); // \PHPUnit\Framework\TestCase
 
    $this->assertTrue(true);
});