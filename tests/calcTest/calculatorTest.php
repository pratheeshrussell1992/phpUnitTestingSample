<?php

include(__DIR__ . "/../../src/calculator.php");
use testsample\calc\Calculator;
use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase {

    public function testAddSuccess() {
         $calc = new Calculator();
         $this->assertEquals(5, $calc->Add(2,3));
    }

    public function testAddFail() {
        $calc = new testsample\calc\Calculator();
        $this->assertEquals(10, $calc->Add(2,3));
    }

    public function testMultiplySuccess() {
        $calc = new Calculator();
        $this->assertEquals(6, $calc->Multiply(2,3));
    }

    public function testMultiplyFail() {
        $calc = new testsample\calc\Calculator();
        $this->assertEquals(10, $calc->Multiply(2,3));
    }
	
}