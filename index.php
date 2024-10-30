<?php
// session = Super Global Variable (SGB) store info on a user to be used across multiple pages / session-id (ex. login credentials)
// required to have "session_start()" in the first line to start session

session_start();
?>

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
        <input type="text" name="username" id="username"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>

        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>

<?php
// $_SESSION['username'] = 'admin';
// $_SESSION['password'] = '12345';

// echo $_SESSION['username'] . '<br>';
// echo $_SESSION['password'] . '<br>';

if (isset($_POST['login'])) {
    $_SESSION['username'] = $_POST['username']; // could use filters
    $_SESSION['password'] = $_POST['password']; // same

    if (!empty($_SESSION['username']) && !empty($_SESSION['password'])) {
        // echo 'Welcome ' . $_SESSION['username'] . '<br>';
        // echo 'Your password is ' . $_SESSION['password'] . '<br>';

        header('Location: home.php'); // redirect
    } else {
        echo "Missing username / password <br>";
    }
}
?>