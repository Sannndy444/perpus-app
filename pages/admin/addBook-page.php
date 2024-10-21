<?php
require '../../config/config.php';
session_start();

if ($_SESSION["role"] !== 'admin') {
    echo "<script>alert('Access denied.');</script>";
    header("Location: ../login-page.php");
    exit;
}

$sql_authorName = "SELECT author_id, author_name FROM author";
$result_authorName = mysqli_query($db, $sql_authorName);

$sql_publisherName = "SELECT publisher_id, publisher_name FROM publisher";
$result_publisherName = mysqli_query($db, $sql_publisherName);

$sql_categoryName = "SELECT category_id, category_name FROM categories";
$result_categoryName = mysqli_query($db, $sql_categoryName);
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
        <div class="navbar">
            <?php include '../navbar.php'; ?>
        </div>
        <div class="addbook">
            <div class="title">
                <h2>Add Book</h2>
            </div>
            <div class="addbook-form">
                <form action="../../process/addBook.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="bookName" name="bookName" id="bookName" placeholder="Enter book name" required>
                    </div>
                    <div class="form-group">
                        <select name="authorName" id="authorName" required>
                            <?php
                                if (mysqli_num_rows($result_authorName) > 0) {
                                    while ($row = $result_authorName->fetch_assoc()) {
                                        echo '<option value="' . $row['author_id'] . '">' . $row['author_name'] . '</option>';
                                    }
                                } else {
                                    echo '<option value=""> No options </option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="categoryName" id="categoryName" required>
                            <?php
                                if (mysqli_num_rows($result_categoryName) > 0) {
                                    while ($row = $result_categoryName->fetch_assoc()) {
                                        echo '<option value="' . $row['category_id'] . '">' . $row['category_name'] . '</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="publisherName" id="publisherName" required>
                            <?php
                                if (mysqli_num_rows($result_publisherName) > 0) {
                                    while ($row = $result_publisherName->fetch_assoc()) {
                                        echo '<option value="' . $row['publisher_id'] . '">' . $row['publisher_name'] . '</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="publisYear" name="publishYear" id="publisherYear" placeholder="Enter publish year" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="img" id="img" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit">Add</button>
                    </div>
        </div>
    </div>
</body>
</html>