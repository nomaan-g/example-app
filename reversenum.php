<?php
echo "The reversed number of $inputNumber is: $result";

/**
 * A function to reverse a number in PHP.
 *
 * @param int $number The number to be reversed.
 * @return int The reversed number.
 */
function reverseNumber($number) {
    if (!is_numeric($number)) {
        return "Invalid input. Please provide a numeric value.";
    }

    $reversedNumber = 0;
    $originalNumber = abs($number); // Ensure the original number is non-negative

    while ($originalNumber > 0) {
        $digit = $originalNumber % 10;

        $reversedNumber = $reversedNumber * 10 + $digit;

        $originalNumber = (int)($originalNumber / 10);
    }

    return ($number < 0) ? -$reversedNumber : $reversedNumber;
}

$inputNumber = 12345; // Change this number to test different reversals
$result = reverseNumber($inputNumber);
echo "The reversed number of $inputNumber is: $result";

?>

