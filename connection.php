<?php

$conn = mysqli_connect("localhost", "root", "", "register_login");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    exit();
}

?>