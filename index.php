<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" name="username"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email"><br>
        <label for="age">Age:</label><br>
        <input type="text" name="age"><br>
        <label for="height">Height:</label><br>
        <input type="text" name="height"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>

<?php
// sanitize & validate input - filter_input() - FILTER_SANITIZE_SPECIAL_CHARS - FILTER_SANITIZE_NUMBER_INT - FILTER_SANITIZE_NUMBER_FLOAT - FILTER_SANITIZE_EMAIL -- FILTER_VALIDATE_INT - FILTER_VALIDATE_FLOAT - FILTER_VALIDATE_EMAIL

// if (isset($_POST['login'])) {
//     $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
//     $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
//     $height = filter_input(INPUT_POST, 'height', FILTER_VALIDATE_FLOAT);
//     $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
//     echo "Welcome {$username}";
//     echo "<br>";
//     echo "Age: {$age}";
//     echo "<br>";
//     echo "Height: {$height}";
//     echo "<br>";
//     echo "Email: {$_POST['email']}";
// }


if (isset($_POST['login'])) {
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
}
?>