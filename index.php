<?php
include "database.php";

// mysqli_fetch_assoc -> fetch row as an array (associative array)

// $sql = "SELECT * FROM users WHERE user = 'John'";

// $sql = "SELECT * FROM users";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo $row['id'] . "<br>";
//         echo $row['user'] . "<br>";
//         // echo $row['password'] . "<br>";
//         echo $row['reg_date'] . "<br> <br>";
//     };
// } else {
//     echo "No results";
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- htmlspecialchars -> prevents xss attacks -->
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <h2>Welcome to Fakebook</h2>
        <label for="username">Username</label>
        <input type="text" name="username"><br>

        <label for="password">Password</label>
        <input type="password" name="password"><br>

        <input type="submit" name="submit" value="Register">
    </form>
</body>

</html>


<?php
// filter_sanitize_special_chars -> prevents xss attacks - ignores special characters
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    // echo $username . "<br>";
    // echo $password . "<br>";

    if (empty($username) || empty($password)) {
        echo "Please fill all fields";
        exit();
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

        try {
            mysqli_query($conn, $sql);
            echo "User created";
        } catch (mysqli_sql_exception) {
            echo "User already exists";
        }
    }
}

mysqli_close($conn);
?>