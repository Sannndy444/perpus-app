<?php
require '../config/config.php';
session_start();

if(isset($_POST['submit']) && isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
    $authorName = $_POST['authorName'];
    
    $duplicate = mysqli_query($db, "SELECT author_name FROM author WHERE author_name = '$authorName'");

    if(mysqli_num_rows($duplicate) > 0) {
        echo "
        <script>
            alert('Author Sudah Ada');
            window.location.href = '../pages/admin/addAuthor-page.php';
        </script>
        ";
    } else {
        $sql = "INSERT INTO author (author_name) VALUES ('$authorName')";
        $result = mysqli_query($db,$sql);
        if ($result) {
            echo "
            <script>
                alert('Author Berhasil Di Tambahkan');
                window.location href = '../pages/admin/addAuthor-page.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Author Gagal Di Tambahkan');
                window.location href = '../pages/admin/addAuthor-page.php';
            </script>
            ";
        }
    }
}