<?php

namespace PDS\Tests\Examples;

use PDS\Examples\SampleClass;
use PHPUnit\Framework\TestCase;

final class SampleClassTest extends TestCase
{
    public function testCreatingSampleClassInstance()
    {
        $this->assertInstanceOf(
            SampleClass::class,
            new SampleClass(),
            'Class instance created sucesfully'
        );
    }

    public function testNonStaticMethodOutput()
    {
        $classInstance = new SampleClass();

        $this->assertSame(
            $classInstance->nonStaticMethod(),
            'This is non static method',
            'Method returns expected output'
        );
    }

    public function testStaticMethodOutput()
    {
        $this->assertSame(
            SampleClass::staticMethod(),
            'This is static method',
            'Method returns expected output'
        );
    }
}
