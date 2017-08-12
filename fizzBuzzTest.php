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
    $this->assertEquals('FizzBuzz', $this->fizzbuzz->says(45));
    $this->assertEquals('Buzz', $this->fizzbuzz->says(5));
    $this->assertEquals('Buzz', $this->fizzbuzz->says(10));
    $this->assertEquals('Fizz', $this->fizzbuzz->says(3));
    $this->assertEquals('Fizz', $this->fizzbuzz->says(6));
    $this->assertEquals(2, $this->fizzbuzz->says(2));
    $this->assertNotEquals('FizzBuzz', $this->fizzbuzz->says(5));
    $this->assertNotEquals('FizzBuzz', $this->fizzbuzz->says(3));
    $this->assertNotEquals('FizzBuzz', $this->fizzbuzz->says(8));
    $this->assertNotEquals('Buzz', $this->fizzbuzz->says(3));
    $this->assertNotEquals('Fizz', $this->fizzbuzz->says(5));

  }
}

?>
