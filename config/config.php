<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "perpus_db";

$db = mysqli_connect($server, $user, $pass, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}