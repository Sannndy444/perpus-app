<?php
require '../config/config.php';

if ($_SESSION["role"] !== 'admin') {
    echo "<script>alert('Access denied.');</script>";
    header("Location: ../pages/dashboard-page.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
    <div class="addBook-container">
        <div class="addbook">
            <div class="title">
                <h2>Add Book</h2>
            </div>
            <div class="addbook-form">
                <form action="../process/addbook.php" method="post">
                    <div class="form-group">
                        <input type="bookName" name="bookName" id="bookName" placeholder="Enter book name" required>
                    </div>
                    <div class="form-group">
                        <input type="author" name="author" id="author" placeholder="Enter author name" required>
                    </div>
                    <div class="form-group">
                        <input type="publisYear" name="publishYear" id="publisherYear" placeholder="Enter publish year" required>
                    </div>
                    <div class="form-group">
                        <input type="category" name="category" id="category" placeholder="Enter category" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit">Add</button>
                    </div>
        </div>
    </div>
</body>
</html>