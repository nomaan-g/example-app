<?php

/**
 * Class Practical
 * This class contains practical static functions for common tasks.
 */
class Practical
{
    /**
     * Generates a random string of specified length.
     *
     * @param int $length The length of the random string.
     * @return string The generated random string.
     */
    public static function generateRandomString($length)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

    /**
     * Formats a given date string to a user-friendly format.
     *
     * @param string $dateString The input date string.
     * @return string The formatted date string.
     */
    public static function formatDate($dateString)
    {
        // Assuming $dateString is in a standard date format like "YYYY-MM-DD"
        $timestamp = strtotime($dateString);
        $formattedDate = date('F j, Y', $timestamp);

        return $formattedDate;
    }

    /**
     * Truncates a given string to a specified length and appends ellipsis if needed.
     *
     * @param string $text The input string to be truncated.
     * @param int $maxLength The maximum length of the truncated string.
     * @return string The truncated string.
     */
    public static function truncateString($text, $maxLength)
    {
        if (strlen($text) > $maxLength) {
            $truncatedText = substr($text, 0, $maxLength - 3) . '...';
        } else {
            $truncatedText = $text;
        }

        return $truncatedText;
    }
}

// Example usage:
$randomString = Practical::generateRandomString(8);
$formattedDate = Practical::formatDate('2023-11-18');
$truncatedText = Practical::truncateString('Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 20);

echo "Random String: $randomString\n";
echo "Formatted Date: $formattedDate\n";
echo "Truncated Text: $truncatedText\n";
?>

