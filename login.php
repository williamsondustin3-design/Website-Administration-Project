<?php
// database connection details
$servername = "localhost";
$username   = "root";
$password   = "(Ukog91!)";
$dbname     = "classconnect";

// connect to the mysql database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// read username and password sent from javascript via POST
$user = $_POST['username'];
$pass = $_POST['password'];

// query to check if the submitted username and password exist in the users table
$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = mysqli_query($conn, $sql);

// if at least one row matches, login is valid
if (mysqli_num_rows($result) > 0) {
    echo "Login successful (success)";
} else {
    // no matching account found
    echo "Invalid username or password.";
}

// close database connection
mysqli_close($conn);
?>
