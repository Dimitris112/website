<?php

// cookie handling - setcookie("key", "value", time() + (86400 * 7), "/"); // 86400 = 1 day in seconds - stored for 1 week - "/" for default filepath
// F12 -> applications -> cookies = non sensitive data
// for example delete cookies with "- 0" on seconds

setcookie("fav_food", "burger", time() + (86400 * 7), "/");
setcookie("fav_drink", "coffee", time() + (86400 * 4), "/");
setcookie("fav_desert", "cake", time() + (86400 * 3), "/");

// foreach ($_COOKIE as $key => $value) {
//     echo $key . ": " . $value . "<br>";
// }

if (isset($_COOKIE["fav_food"])) {
    echo "Buy some {$_COOKIE["fav_food"]}<br>";
} else {
    echo "Dunno your fav food<br>";
}
