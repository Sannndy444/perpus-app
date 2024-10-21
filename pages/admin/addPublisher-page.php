<?php
require '../../config/config.php';
session_start();

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
    <title>Add Publisher</title>
</head>
<body>
    <div class="publisher-container">
        <div class="navbar">
            <?php include '../navbar.php'; ?>
        </div>
        <div class="publisher">
            <div class="title">
                <h2>
                    Add Publisher
                </h2>
            </div>
            <div class="publisher-form">
                <form action="../../process/addPublisher.php" method="POST">
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