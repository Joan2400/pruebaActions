<?php
use PHPUnit\Framework\TestCase;
include 'Calculadora.php';
final class CalculadoraTest extends TestCase
{
public function testSuma()
{
$calc = new Calculadora(3,4);
$this->assertEquals(7, $calc->suma());
}

public function testResta()
{
$calc = new Calculadora(5,4);
$this->assertEquals(1, $calc->resta());
}

public function testMultiplicacion()
{
$calc = new Calculadora(5,4);
$this->assertEquals(20, $calc->multiplicacion());
}


public function testDivision()
{
$calc = new Calculadora(10,5);
$this->assertEquals(2, $calc->division());
}

public function testDivisionResto()
{
$calc = new Calculadora(10,5);
$this->assertEquals(0, $calc->resto());
}
}
?>