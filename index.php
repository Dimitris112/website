<?php

$grade = "B";
$date = date("l");

// $date = "asdad";

// switch ($grade) {
//     case "A":
//         echo "Excellent";
//         break;
//     case "B":
//         echo "Very Good";
//         break;
//     case "C":
//         echo "Good";
//         break;
//     default:
//         echo "{$grade} is not a valid grade";
// }

switch($date){
    case "Monday":
        echo "Happy Monday";
        break;
    case "Tuesday":
        echo "Happy Tuesday";
        break;
    case "Wednesday":
        echo "Happy Wednesday";
        break;
    case "Thursday":
        echo "Happy Thursday";
        break;
    case "Friday":
        echo "Happy Friday";
        break;
    case "Saturday":
        echo "Happy Saturday";
        break;
    case "Sunday":
        echo "Happy Sunday";
        break;
    default:
        echo "{$date} is not a valid date";
}
?>