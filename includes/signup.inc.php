<?php

// signup.inc.php -> signup 'includes' php
// just a naming convention to avoid confusion with "Signup.php"

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    // Dbh goes first - parent class
    require_once '../Classes/Dbh.php';
    require_once '../Classes/Signup.php';

    $signup = new Signup($username, $pwd);
    $signup->signupUser();
}
