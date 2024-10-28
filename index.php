<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get vs Post</title>
</head>
<body>
    <form action="index.php" method="POST">
    <label>username:</label><br>
    <input type="text" name="username"><br>

    <label">password:</label><br>
    <input type="password" name="password"><br>

    <input type="submit" value="Log in">
    </form>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="quantity">quantity:</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>


<?php
// echo "{$_GET['username']} <br>";
// echo "{$_GET['password']} <br>";

// echo "{$_POST['username']} <br>";
// echo "{$_POST['password']} <br>";


/*
$_GET = Data is appended to the url - not secure - char limit - bookmark possible w/ values - GET requests can be cached - better for search page

$_POST = Data is packaged inside the body of the HTTP request - more secure - no data limit - cannot bookmark - GET requests are not cached - better for submitting credentials

*/


$item = "pizza";
$price = 5.50;
$quantity = $_POST["quantity"];
$total = null;

$total = $quantity * $price;

echo"Ordered {$quantity} {$item}/s for \${$total}";

?>