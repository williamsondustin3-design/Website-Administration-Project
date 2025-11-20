<?php
$servername = "localhost";
$username   = "root";
$password   = "(Ukog91!)";
$dbname     = "classconnect";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Login successful (success)";
} else {
    echo "Invalid username or password.";
}

mysqli_close($conn);
?>
