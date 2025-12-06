<?php
// database connection details
$servername = "localhost";
$username   = "root";
$password   = "(Ukog91!)";
$dbname     = "classconnect";

// connect to mysql database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// read submitted username and password from the POST request
$user = $_POST['username'];
$pass = $_POST['password'];

// check if the username already exists before creating an account
$check = "SELECT * FROM users WHERE username='$user'";
$result = mysqli_query($conn, $check);

// if a row already exists, the username is taken
if (mysqli_num_rows($result) > 0) {
    echo "Username already exists.";
} else {
    // insert new user into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";

    // check if insert was successful
    if (mysqli_query($conn, $sql)) {
        echo "Account created successfully (success)";
    } else {
        echo "Error creating account.";
    }
}

// close the database connection
mysqli_close($conn);
?>
