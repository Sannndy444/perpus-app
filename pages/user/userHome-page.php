<?php
require '../../config/config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="userHome-container">
        <div class="navbar">
            <?php include '../navbar.php'; ?>
        </div>
        <div class="userHome">
            <div class="title">
                <h2>
                    Helo user
                </h2>
            </div>
        </div>
    </div>
</body>
</html>