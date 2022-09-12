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
        echo "Connected";
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

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <title>Login</title>
</head>
<body>

<div class="container">

    <div class="col-sm-6">

        <form action="site.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <label>
                    <input type="text" name="username" class="form-control">
                </label>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <label>
                    <input type="password" name="password" class="form-control">
                </label>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>

    </div>

</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>CRSystem</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <form action="site.php" method="post" class="form-inputs">
        What is your name? <input type="text" name="name" />
        What is your gender? Male <input type="radio" name="gender-m"> Female <input type="radio" name="gender-f">
        What is your age? <input type="number" name="age">
        What is your height? <input type="number" name="height">
        What is your weight? <input type="number" name="weight">
        What is your favourite season? <select>
            <option value="spring" name="spring">Spring</option>
            <option value="summer" name="summer">Summer</option>
            <option value="autumn" name="autumn">Autumn</option>
            <option value="winter" name="winter">Winter</option>
        </select>
        <input type="submit">
    </form>

    <?php

    echo $_POST['name'];
    echo $_POST['gender-f'];
    echo $_POST['gender-m'];
    echo $_POST['age'];
    echo $_POST['height'];
    echo $_POST['weight'];
    echo $_POST['spring'];
    echo $_POST['summer'];
    echo $_POST['autumn'];
    echo $_POST['winter'];


    ?>
</body>
</html>
