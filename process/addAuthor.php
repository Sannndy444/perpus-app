<?php
require '../config/config.php';
session_start();

if(isset($_POST['submit']) && isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
    $authorName = $_POST['authorName'];
    $sql = "INSERT INTO authors (author_name) VALUES ('$authorName')";
    mysqli_query($conn, $sql);
    header('location: ../pages/addAuthor-page.php');
}