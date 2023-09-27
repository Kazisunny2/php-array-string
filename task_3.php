<!--Task 3: Array Sorting  
Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.-->

<?php
function sortGradesDescending($grades)
{
    // Sort the array in descending order
    rsort($grades);

    // Print the sorted grades
    print_r($grades);
}

// Create an array with the grades
$grades = array(85, 92, 78, 88, 95);

// Call the function to sort grades in descending order
sortGradesDescending($grades);
?>