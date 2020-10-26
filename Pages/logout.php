<?php

session_start();
session_unset();
session_destroy();

if(isset($_COOKIE['email']) and isset($_COOKIE['password']) ) {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    setcookie('email', $email, time() - (60 * 60 * 7));
    setcookie('password', $password, time() - (60 * 60 * 7));
}
echo "You Succesfully Log out <br>";
echo "<a href='Login.php'>Click here to login</a>";