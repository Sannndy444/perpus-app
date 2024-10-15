<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "perpus_db";

$conn = mysqli_connect($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}