<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" name="login" value="Log in">
    </form>
</body>

</html>

<?php
// isset() returns TRUE if a variable is set - not null - true
// empty() returns TRUE if a variable is empty string - not declared - false


// $username = "";

// if (isset($username)) {
//     echo "Variable is set";
// } else {
//     echo "Variable is not set";
// }

// echo "<br>";

// if (empty($username)) {
//     echo "Variable is empty";
// } else {
//     echo "Variable is not empty";
// }


foreach ($_POST as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

echo "<br>";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "Username is empty";
    } elseif (empty($password)) {
        echo "Password is empty";
    } else {
        echo "Hi {$username}";
    }
}
