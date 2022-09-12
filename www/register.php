<?php
if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "loginapp";

    $conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

    if ($conn) {
        echo "Registered";
    } else {
        die("DB connection failed");
    }

    if (!$username && $password) {
        echo "Enter the credentials!";
    }

    $query = "INSERT INTO users(username,password)";
    $query .= "VALUES ('$username','$password')";
    $result = mysqli_query($conn, $query);

    // If the result is not true, then the query failed, stop all the code and display the error
    if (!$result) {
        die("Query failed" . mysqli_error($conn));
    }
}

