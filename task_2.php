<!--Task 2: Array Manipulation
Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.-->

<?php
function removeEvenNumbers($numbers)
{
    // Initialize an empty array to store odd numbers
    $oddNumbers = array();

    // Iterate through the input array
    foreach ($numbers as $number) {
        // Check if the number is odd (not divisible by 2)
        if ($number % 2 != 0) {
            // If it's odd, add it to the $oddNumbers array
            $oddNumbers[] = $number;
        }
    }

    // Print the resulting array with even numbers removed
    print_r($oddNumbers);
}

// Create an array containing numbers 1 to 10
$numbers = range(1, 10);

// Call the function to remove even numbers
removeEvenNumbers($numbers);
?>