<?php
	// Coercive mode
   function sum(int ...$ints) {
      return array_sum($ints);
   }
   print(sum(2, '3', 4.1));

   
   declare(strict_types = 1);
   function returnIntValue(float $value): float {
      return $value;
   }
   print(returnIntValue(5));
?>