<?php
    // Include the file with the database connection function
    include ("./connection.php");

    // Get the database connection
    $conn = getDatabaseConnection();

    // Get the input from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the database for the user
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    // Check if the query returned any rows
    if (mysqli_num_rows($result) == 1) {
        // The user is authenticated, redirect to the dashboard or some other page
        header("Location: index.php");
    } else {
        // Invalid credentials, redirect back to the login page with an error message
        echo "incorrect details";
    }
?>