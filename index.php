<?php
// hashing -> transform sensitive data into letters - numbers - symbols via mathematical process (like encryption) - Hides original data from 3rd parties
// password_verify(string $password, string $hash): bool - check if password is correct
$password = "pass123";

$hash = password_hash($password, PASSWORD_DEFAULT);

// required "pass123" to complete - else always will show "Password is wrong" (burger123)
if (password_verify("burger123", $hash)) {
    echo "Password is correct";
} else {
    echo "Password is wrong";
}
