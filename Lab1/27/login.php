<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$email = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE User_password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    header("Location: login.php?error=Invalid email or password");
    exit();
} else {
    $row = $result->fetch_assoc();
    $storedPassword = $row["User_password"];


    if ($password == $storedPassword) {
        echo "Login Successfull";
    } else {
        header("Location: login.php?error=Invalid username or password");
        exit();
    }
}

$conn->close();
