<?php
require '../config/config.php';
session_start();

if(isset($_POST['submit'])){
    $mailUser = $_POST['mailUser'];
    $pass = $_POST['pass'];
    $sql = "SELECT user_id, password FROM users WHERE email = '$mailUser' OR username = '$mailUser'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
        $_SESSION['mailUser'] = $mailUser;
        header('location: ../pages/book-page.php');
    }
    else{
        echo 'Invalid email or password';
    }
}
?>