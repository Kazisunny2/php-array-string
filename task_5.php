<!-- Task 5: Password Generator
Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.-->

<?php
function generatePassword($length)
{
    // Define character sets for different types of characters
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Combine all character sets
    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;

    // Initialize the password variable
    $password = '';

    // Generate a random password
    for ($i = 0; $i < $length; $i++) {
        // Get a random character from the combined character set
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];

        // Append the random character to the password
        $password .= $randomChar;
    }

    return $password;
}

// Specify the desired password length (e.g., 12 characters)
$passwordLength = 12;

// Generate a password with the specified length
$password = generatePassword($passwordLength);

// Print the generated password
echo "Generated Password: $password\n";
?>