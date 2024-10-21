<?php
require '../config/config.php';
session_start();

if(isset($_POST['submit']) && isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
    $bookName = mysqli_real_escape_string($db, $_POST['bookName']);
    $authorName = mysqli_real_escape_string($db, $_POST['authorName']);
    $categoryName = mysqli_real_escape_string($db, $_POST['categoryName']);
    $publisherName = mysqli_real_escape_string($db, $_POST['publisherName']);
    $publishYear = mysqli_real_escape_string($db, $_POST['publishYear']);

    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['img']['name'];
        $target_dir = '../uploads/';
        $target_file = $target_dir . basename($image);

        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            $sql = "INSERT INTO books (title, image, author_id, publisher_id, category_id, published_year) VALUES ('$bookName', '$image', '$authorName', '$publisherName', '$categoryName', '$publishYear')";

            if (mysqli_query($db, $sql)) {
                echo "berhasil";
            } else {
                echo "gagal";
            }
        }
    }    
}