<?php
require '../config/config.php';
session_start();

if(isset($_POST['submit'])){
    $publisherName = $_POST['publisherName'];
    
    $duplicate = mysqli_query($db, "SELECT publisher_name FROM publisher WHERE publisher_name = '$publisherName'");

    if(mysqli_num_rows($duplicate) > 0) {
        echo "double";
        echo "
        <script>
            alert('Publisher Sudah Ada');
            window.location.href = '../pages/admin/addPublisher-page.php';
        </script>
        ";
    } else {
        $sql = "INSERT INTO publisher (publisher_name) VALUES ('$publisherName')";
        $result = mysqli_query($db, $sql);
        if ($result) {
            echo "berhasil";
            echo "
            <script>
                alert('Publisher Berhasil Di Tambahkan');
                window.location.href = '../pages/admin/addPublisher-page.php';
            </script>
            ";
        } else {
            echo "gagal";
            echo "
            <script>
                alert('Publisher Gagal Di Tambahkan');
                window.location.href = '../pages/admin/addPublisher-page.php';
            </script>
            ";
        }
    }
}