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
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="categories-container">
        <div class="categories">
            <div class="title">
                <h2>Add Categories</h2>
            </div>
            <div class="categories-form">
                <form action="../process/addcategory.php" method="post">
                    <div class="form-group">
                        <input type="categoryName" name="categoryName" id="categoryName" placeholder="Enter category name" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit">Add</button>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>