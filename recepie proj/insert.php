<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "recipe";
$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "INSERT INTO students(name, username, email, password) VALUES('$name', '$username', '$email', '$password')";
    if (mysqli_query($connection, $query)) {
        echo "Account Created <a href='login.php'><button>Continue to login</button></a>";
    } else {
        echo "Failed to insert: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
