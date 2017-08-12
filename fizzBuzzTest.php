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
  public function testFizzBuzzSays()
  {
    $this->assertEquals('FizzBuzz', $this->fizzbuzz->says(15));
    $this->assertEquals('Buzz', $this->fizzbuzz->says(5));
    $this->assertEquals('Fizz', $this->fizzbuzz->says(3));
    $this->assertEquals(2, $this->fizzbuzz->says(2));
  }
}

?>
