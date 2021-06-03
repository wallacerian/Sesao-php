<?php

session_start();
$login = "1111";
$password = "1111";

if($login == "admin" && $password == "12345"){
    $_SESSION['login'] = true;
    echo "Success!";
} else {
    echo "Error!";
}
?>

<a href="secret.php">Get in</a>
