<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once 'fizzBuzz.php';

class FizzBuzzTest extends Testcase
{
  protected function setUP()
  {
    $this->fizzbuzz = new FizzBuzz();
  }
  public function testDivisibleBy3()
  {
    // number is divisible by 3
    $this->assertTrue($this->fizzbuzz->isDivisibleBy3(6));
  }

  public function testDivisibleBy5()
  {
    $this->assertTrue($this->fizzbuzz->isDivisibleBy5(10));
  }
}

?>
