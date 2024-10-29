<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="index.php" method="POST">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="burger" value="Burger">Burger<br>
        <input type="checkbox" name="fries" value="Fries">Fries<br>
        <input type="checkbox" name="hotdog" value="Hotdog">Hotdog<br>
        <input type="submit" name="submit" value="Submit">
    </form> -->

    <form action="index.php" method="POST">
        <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="Burger">Burger<br>
        <input type="checkbox" name="foods[]" value="Fries">Fries<br>
        <input type="checkbox" name="foods[]" value="Hotdog">Hotdog<br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>

<?php
// if (isset($_POST['submit'])) {
//     if (isset($_POST['pizza'])) {
//         echo "Like pizza <br>";
//     }
//     if (isset($_POST['burger'])) {
//         echo "Like burger <br>";
//     }
//     if (isset($_POST['fries'])) {
//         echo "Like fries <br>";
//     }
//     if (isset($_POST['hotdog'])) {
//         echo "Like hotdog <br>";
//     }

//     if (empty($_POST['pizza']) && empty($_POST['burger']) && empty($_POST['fries']) && empty($_POST['hotdog'])) {
//         echo "Nothing selected";
//     }
// }

if (isset($_POST['submit'])) {
    $foods = $_POST['foods'];

    foreach ($foods as $food) {
        echo $food . '<br>';
    }
}
?>