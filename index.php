<?php
include "database.php";

// mysqli_fetch_assoc -> fetch row as an array (associative array)

// $sql = "SELECT * FROM users WHERE user = 'John'";

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['id'] . "<br>";
        echo $row['user'] . "<br>";
        // echo $row['password'] . "<br>";
        echo $row['reg_date'] . "<br> <br>";
    };
} else {
    echo "No results";
}

mysqli_close($conn);
