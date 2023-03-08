<?php


class CalculatorTest extends PHPUnit\Framework\TestCase {
    public function testAdd() {
      $calculator = new Calculator();
      $result = $calculator->add(2, 2);
      $this->assertEquals(4, $result);
                    }
  
    // public function testSubtract() {
    //   $calculator = new Calculator();
    //   $result = $calculator->subtract(4, 2);
    //   $this->assertEquals(2, $result);
    // }
   

}

?>