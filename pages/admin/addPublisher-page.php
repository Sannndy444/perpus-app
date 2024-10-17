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
    <div class="publisher-container">
        <div class="publisher">
            <div class="title">
                Add Publisher
            </div>
            <div class="publisher-form">
                <form action="../process/addpublisher.php" method="post">
                    <div class="form-group">
                        <input type="publisherName" name="publisherName" id="publisherName" placeholder="Enter publisher name" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit">Add</button>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>