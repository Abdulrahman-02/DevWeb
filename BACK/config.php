<?php

$server = "localhost";
$user = "root";
$pass = "Abdou_2002";
$database = "dev_web_ummto";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('La Connection a echouée.')</script>");
}

?>