<?php

/**
 * A factorial function in PHP.
 *
 * @param int $n The number for which to calculate the factorial.
 * @return int The factorial of the given number.
 */
function factorial($n) {
    if ($n < 0) {
        // Factorial is not defined for negative numbers
        return "Undefined for negative numbers";
    } elseif ($n == 0 || $n == 1) {
        // Base case: factorial of 0 and 1 is 1
        return 1;
    } else {
        // Recursive case: n! = n * (n-1)!
        return $n * factorial($n - 1);
    }
}

$number = 5; // Change this number to test different factorials
$result = factorial($number);

echo "The factorial of $number is: $result";

?>

