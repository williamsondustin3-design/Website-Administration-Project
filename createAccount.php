<?php
$servername = "localhost";
$username   = "root";
$password   = "(Ukog91!)";
$dbname     = "classconnect";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$user = $_POST['username'];
$pass = $_POST['password'];

$check = "SELECT * FROM users WHERE username='$user'";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) > 0) {
    echo "Username already exists.";
} else {
    $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
    if (mysqli_query($conn, $sql)) {
        echo "Account created successfully (success)";
    } else {
        echo "Error creating account.";
    }
}

mysqli_close($conn);
?>
