<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$database = "recipe";
$connection = mysqli_connect($hostname, $username, $password, $database);

$query = "SELECT * FROM students where email='".$_POST['email']."' and password='".$_POST['password']."'";

$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) > 0){
    $data = mysqli_fetch_assoc($result);
    $_SESSION['logged'] = true;
    $_SESSION['id'] = $data['id'];
    header("Location: recipe.php");
}else{
    echo "Not valid login credential. <a href='login.php'><button>Try again</button></a>";
}