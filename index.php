<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        username:<br>
        <input type="text" name="username">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
// htmlspecialchars - converts special characters to HTML entities - secured against CSRF attacks

// $_SERVER = super global variable (SGB) contains information about headers, paths, and more about the request and the response
// "key" = "value"
// Important stuff -> PHP_SELF - current file name / REQUEST_METHOD - current request method

// foreach ($_SERVER as $key => $value) {
//     echo $key . " = " . $value . "<br>";
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    echo $username;
}
