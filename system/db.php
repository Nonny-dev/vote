<?php

$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "vote";

$conn = new mysqli($servername,$user,$pass,$dbname);
mysqli_set_charset($conn,"utf8mb4");

?>