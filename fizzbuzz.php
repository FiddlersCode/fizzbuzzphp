<?php
declare(strict_types=1);

  class FizzBuzz {
    public function says($number){
      if ($number % 15 == 0){
        return 'FizzBuzz';
      } elseif ($number % 5 == 0) {
        return 'Buzz';
      } elseif ($number % 3 == 0) {
        return 'Fizz';
      }
      else {
        return $number;
      }
    }
  }



?>
