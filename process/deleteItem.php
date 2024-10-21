<?php
require '../config/config.php';
session_start();

if(isset($_GET['book_id'])) {
    $book_id = mysqli_real_escape_string($db, $_GET['book_id']);

    $sql = "DELETE FROM books WHERE book_id = '$book_id'";
    $result = mysqli_query($db, $sql);

    if($result) {
        echo "
        <script>
            alert('Item delete success');
            window.location.href = '../pages/';
        </script>
        ";
    }
}