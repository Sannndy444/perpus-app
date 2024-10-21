<?php
require '../../config/config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
</head>
<body>
    <div class="library-container">
        <div class="navbar">
            <?php include '../navbar.php'; ?>
        </div>
        <div class="library">
            <div class="title">
                <h2>
                    Library
                </h2>
            </div>
        </div>
    </div>
</body>
</html>