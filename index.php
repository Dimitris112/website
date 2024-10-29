<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <!-- <label for="number">Enter a number to count to:</label><br> -->
        <label for="number">Enter a number to count down from:</label><br>
        <input type="number" name="number"><br>
        <input type="submit" value="Start">
    </form>
</body>

</html>


<?php
// for($i =2;$i <=30;$i+=2){
//     echo $i . "\n";
// }

// for($i = 10; $i > 0; $i--){
//     echo $i . "\n";
// }



$counter = $_POST["counter"];
// // for ($i = 1; $i <= $counter; $i++) {
// //     echo $i . "<br>";
// // }

for ($i = $counter; $i > 0; $i--) {
    echo $i . "<br>";
}

?>