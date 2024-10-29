<?php
$temp = 132;
$cloudy = true;
$age = 28;
$citizen = true;
$child = false;
$senior = false;
$ticket_price = null;

// if($temp >= 0 && $temp <= 30 ){
//     echo"The temperature is normal";
// }
// else{
//     echo"The temperature is not normal";
// }

// if($temp < 0 || $temp > 30 ){
//     echo"The temperature is bad";
// }
// else{
//     echo"The temperature is good";
// }

// if(!$cloudy){
//     echo"It's sunny";
// }
// else {
//     echo "It's cloudy";
// }

// if($age >= 18 && $citizen){
//     echo"You can vote";
// }
// else{
//     echo"You can't vote";
// }

// if(!$age >= 18 || !$citizen){
//     echo"You cannot vote";
// }
// else{
//     echo"You can vote";
// }

if($child || $senior ){
    $ticket = 10;
}
else{
    $ticket = 15;
}
echo"Tickets cost \${$ticket}";
?>

<!-- const ticket = (child || senior) ? 10 : 15;  js example  -->