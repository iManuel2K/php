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