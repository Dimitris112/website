<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <input type="radio" name="payment" value="Visa">Visa<br>
        <input type="radio" name="payment" value="MasterCard">MasterCard<br>
        <input type="radio" name="payment" value="PayPal">PayPal<br>
        <input type="submit" name="confirm" value="Confirm">
    </form>
</body>

</html>


<?php

// if (isset($_POST['confirm'])) {

//     if (isset($_POST['payment'])) {
//         $credit = $_POST['payment'];
//         echo $credit;
//     } else {
//         echo "Please select a payment method";
//     }
// }



// if (isset($_POST['confirm'])) {
//     $credit = null;

//     if (isset($_POST['payment'])) {
//         $credit = $_POST['payment'];
//     }

//     if ($credit == "Visa") {
//         echo "You selected Visa";
//     } else if ($credit == "MasterCard") {
//         echo "You selected MasterCard";
//     } else if ($credit == "PayPal") {
//         echo "You selected PayPal";
//     } else {
//         echo "Please select a payment method";
//     }
// }


if (isset($_POST['confirm'])) {

    $credit = null;

    if (isset($_POST['payment'])) {
        $credit = $_POST['payment'];
    }

    switch ($credit) {
        case "Visa":
            echo "You selected Visa";
            break;
        case "MasterCard":
            echo "You selected MasterCard";
            break;
        case "PayPal":
            echo "You selected PayPal";
            break;
        default:
            echo "Please select a payment method";
            break;
    }
}


?>