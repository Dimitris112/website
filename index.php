<?php
// database name -> businessdb
// table name -> users
// column names -> user, password
// first user -> John, j12345 -- password not hashed
// second user -> Dim, password is hashed - PASSWORD_DEFAULT function

include "database.php";

$username = 'Dim';
$password = 'rock3';
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password)
        VALUES ('$username', '$hash')";

try {
    mysqli_query($conn, $sql);
    echo "User created";
} catch (mysqli_sql_exception) {
    echo "Could not register user";
}

mysqli_close($conn);
