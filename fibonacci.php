<?php

/**
 * A Fibonacci function in PHP.
 *
 * @param int $n The position in the Fibonacci sequence to calculate.
 * @return int The Fibonacci number at the given position.
 */
function fibonacci($n) {
    if ($n < 0) {
        return "Undefined for negative positions";
    } elseif ($n == 0) {
       return 0;
    } elseif ($n == 1) {
         return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}


$position = 7; // Change this position to test different Fibonacci numbers
$result = fibonacci($position);


echo "The Fibonacci number at position $position is: $result";

?>

