<?php

/**
 * Function to generate a pyramid pattern.
 *
 * @param int $rows The number of rows in the pyramid.
 */
function generatePyramid($rows) {
    for ($i = 1; $i <= $rows; $i++) {
        // Add spaces before the stars
        echo str_repeat(' ', $rows - $i);

        // Add stars for each row
        echo str_repeat('*', 2 * $i - 1);

        // Move to the next line
        echo PHP_EOL;
    }
}

// Test the generatePyramid function
$pyramidRows = 5; // Change this value to adjust the size of the pyramid
generatePyramid($pyramidRows);

?>

