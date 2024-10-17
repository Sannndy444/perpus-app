<?php
require '../config/config.php';

if ($_SESSION["role"] !== 'admin') {
    echo "<script>alert('Access denied.');</script>";
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="author-container">
        <div class="author">
            <div class="title">
                <h2>Add Author</h2>
            </div>
            <div class="author-form">
                <form action="../process/addauthor.php" method="post">
                    <div class="form-group">
                        <input type="authorName" name="authorName" id="authorName" placeholder="Enter author name" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit">Add</button>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>