<?php
// Start the session
session_start();

//connect to database
$host = "localhost";
$user = "root";
$password = "password";
$db = "test_db";

// Create connection
$conn = mysqli_connect($host, $user, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Check if the user submitted the form
if (isset($_POST['submit'])) {
    // Get the user inputs
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Create the SELECT query
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    // Execute the query and store the result
    $result = mysqli_query($conn, $query);

    // Check if the query returned a match
    if (mysqli_num_rows($result) == 1) {
        // Log the user in and redirect to the homepage
        $_SESSION['username'] = $username;
        header("Location: homepage.php");
    } else {
        // Show an error message
        echo "Incorrect username or password. Please try again.";
    }
}

// Close the connection
mysqli_close($conn);
