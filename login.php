<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mydatabase";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error)
{
    die("Connection failed: ". $conn->connect_error);
}

$un = $_POST['username'];
$pw = $_POST['password'];

$sql = "SELECT * FROM login_base WHERE password = '$pw'";

$result = $conn->query($sql);

if($result->num_rows == 1)
{
    echo "Login Suceessful";
}

else
{
    echo "Wrong username or password!";
}

$conn->close();


?>