<?php
declare(strict_types=1);

  class FizzBuzz {
    public function isDivisibleBy3($number) {
      if ($number % 3 == 0)
      return true;
    }

    public function isDivisibleBy5($number){
      if ($number % 5 == 0)
      return true;
    }

    public function isDivisibleBy10($number) {
      if ($number % 10 == 0)
      return true;
    }
  }



?>
