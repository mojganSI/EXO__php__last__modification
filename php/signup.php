<!-- signup.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
</head>

<body>
    <h1>Sign Up</h1>
    <form action="signup_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>