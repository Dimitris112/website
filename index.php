<?php
// $age = 0;
// if ($age >=18){
//     echo "You may enter";
// }
// elseif($age == 0){
//     echo" Bruh";
// }
// elseif($age >= 100){
//     echo "What?";
// }
// else {
//     echo "You shall not pass";
// }


$hours = 42;
$rate = 15;
$weekly_pay = null;   

if($hours <= 0){
    $weekly_pay = 0;
}
elseif($hours <= 40){
    $weekly_pay = $hours * $rate;
}
else{
    $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
}
echo "Made \${$weekly_pay} this week";
?>