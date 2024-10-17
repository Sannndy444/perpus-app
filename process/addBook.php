<?php
require '../config/config.php';
session_start();

if(isset($_POST['submit']) && isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
    $bookName = $_POST['bookName'];
    $author = $_POST['author'];
    $publishYear = $_POST['publishYear'];
    $sql = "INSERT INTO books (title, author, published_year) VALUES ('$bookName', '$author', '$publishYear')";
    mysqli_query($conn, $sql);
    header('location: ../pages/dashboard-page.php');
}