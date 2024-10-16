<?php
require '../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <div class="title">
                <h2>Login</h2>
            </div>
            <div class="login-form">
                <form action="../process/login.php" method="post">
                    <div class="form-group">
                        <input type="mailUser" name="mailUser" id="mailUser" placeholder="Enter email or Username" required>
                    </div>
                    <div class="form-group">
                        <input type="pass" name="pass" id="pass" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit">Login</button>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>