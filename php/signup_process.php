<?php
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

//check if the form is submitted
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //hash the password for security
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  //insert the data into the database
  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "Signup Successful";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close the connection
mysqli_close($conn);
