<?php
session_start();

// Define the admin credentials
define('ADMIN_EMAIL', 'animal@gmail.com');
// Hashed password for 'admin@123' using password_hash()
define('ADMIN_PASSWORD_HASH', '$2y$10$aDLbC/nRA84eaAhxAQgL/.d2odhRYRmG9Jvf4Tzz1/TNSXX3CY45S'); // Replace this with the actual hashed password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize email input
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Validate the email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email format.';
        exit();
    }

    // Check if the provided email matches the admin email
    if ($email === ADMIN_EMAIL) {
        // Verify the hashed password
        if (password_verify($password, ADMIN_PASSWORD_HASH)) {
            // Credentials are correct, set session and respond with success
            $_SESSION['loggedin'] = true;
            echo 'success';
            exit();
        } else {
            // Invalid password
            echo 'Invalid email or password.';
        }
    } else {
        // Invalid email
        echo 'Invalid email or password.';
    }
}
?>
