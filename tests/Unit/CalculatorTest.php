<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase{
    public function testAdd(){
        $calculator = new App\Calculator;
        $result = $calculator->add(20,5);

        $this->assertEquals(25, $result);
    }
    public function testSub(){
        $calculator = new App\Calculator;
        $result = $calculator->substract(20,5);

        $this->assertEquals(15, $result);
    }
    public function testMulti(){
        $calculator = new App\Calculator;
        $result = $calculator->multiply(2,5);

        $this->assertEquals(10, $result);
    }
    public function testDiv(){
        $calculator = new App\Calculator;
        $result = $calculator->divide(10,2);

        $this->assertEquals(5, $result);
    }
   
}

?>