<?php

namespace Practicals;

/**
 * Class Practical
 * 
 * A class containing practical static functions.
 */
class Practical {
    
    /**
     * Add two numbers and return the result.
     * 
     * @param int $a The first number.
     * @param int $b The second number.
     * @return int The sum of the two numbers.
     */
    public static function addNumbers($a, $b) {
        return $a + $b;
    }

    /**
     * Check if a given number is even.
     * 
     * @param int $number The number to check.
     * @return bool True if the number is even, false otherwise.
     */
    public static function isEven($number) {
        return $number % 2 === 0;
    }

    /**
     * Generate a personalized greeting.
     * 
     * @param string $name The name to include in the greeting.
     * @return string The formatted greeting.
     */
    public static function greet($name) {
        return "Hello, $name!";
    }

    /**
     * Generate a random number within a specified range.
     * 
     * @param int $min The minimum value of the range.
     * @param int $max The maximum value of the range.
     * @return int The randomly generated number.
     */
    public static function generateRandomNumber($min, $max) {
        return rand($min, $max);
    }
}
