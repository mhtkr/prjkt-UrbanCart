<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydatabase";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error)
    {
        die("Connection error" . $conn->connect_error);
    }

    $un = $_POST['username'];
    $pw = $_POST['password'];

    $sql = "INSERT INTO login_base (username, password) VALUES ('$un', '$pw')";

    if($conn->query($sql) === TRUE)
    {
        echo "Signup Successful!";
    }
    else
    {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>