<?php
require '../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpus Simple</title>
</head>
<body>
    <div class="container">
        <div class="signup">
            <div class="title">
                <h2>Signup</h2>
            </div>
            <div class="signup-form">
                <form action="../process/signup.php" method="post">
                    <div class="form-group">
                        <input type="username" name="username" id="username" placeholder="Enter username" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit">Signup</button>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>