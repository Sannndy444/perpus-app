<?php
require '../config/config.php';
session_start();

if(isset($_POST['submit'])){
    $mailUser = $_POST['mailUser'];
    $pass = $_POST['pass'];
    $sql = "SELECT user_id, username, email ,password, role FROM users WHERE email = '$mailUser' OR username = '$mailUser'";
    $result = mysqli_query($db, $sql);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $password = $row['password'];
        
        if($pass == $password) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['role'] = $row['role'];

            if($row['role'] === 'admin'){
                echo "
                <script>
                    alert('Login Sebagai Admin Berhasil');
                    window.location.href = '../pages/admin/adminHome-page.php';
                </script>
                ";
            } elseif ($row['role'] === 'user') {
                echo "
                <script>
                    alert('Login Sebagai User Berhasil');
                    window.location.href = '../pages/user/userHome-page.php';
                </script>
                ";
            }
        } else {
            echo "password salah";
        }

    } else {
        echo "user tidak terbaca";
    }
}