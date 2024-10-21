<?php

$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'guest';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .dropdown {
            float: left;
            overflow: hidden;
        }
        .dropdown .dropbtn {
            cursor: pointer;
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 20px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .profile .dropbtn {
            position: absolute;
            cursor: pointer;
            font-size: 2.5rem;
            border: none;
            outline: none;
            color: white;
            padding: 0 15px 0 15px;
            right: 0rem;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .profile-content {
            display: none;
            position: absolute;
            top: 3rem;
            right: 1rem;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a, .profile-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover, .profile-content a:hover {
            background-color: #ddd;
        }
        .dropdown:hover .dropdown-content, .profile:hover .profile-content {
            display: block;
        }
        .dropdown:hover .dropbtn, .profile:hover .dropbtn {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
    <?php
        switch ($role) {
            case 'admin';
                echo '<div class="navbar">';
                echo '  <a href="adminHome-page.php">Home</a>';
                echo '  <a href="adminLibrary-page.php">Library</a>';
                echo '  <a href="addBook-page.php">Add Book</a>';
                echo '      <div class="dropdown">';
                echo '          <button class="dropbtn">Other</button>';
                echo '              <div class="dropdown-content">';
                echo '                  <a href="addAuthor-page.php">Add Author</a>';
                echo '                  <a href="addCategory-page.php">Add Category</a>';
                echo '                  <a href="addPublisher-page.php">Add Publisher</a>';
                echo '              </div>';
                echo '      </div>';
                echo '      <div class="profile">';
                echo '          <button class="dropbtn">=</span></button>';
                echo '              <div class="profile-content">';
                echo '                  <a href="../../process/logout.php">Log Out</a>';
                echo '              </div>';
                echo '      </div>';
                echo '</div>';
                break;

            case 'user';
                echo '<div class="navbar">';
                echo '  <a href="userHome-page.php">Home</a>';
                echo '  <a href="library-page.php">Library</a>';
                echo '      <div class="profile">';
                echo '          <button class="dropbtn">=</span></button>';
                echo '              <div class="profile-content">';
                echo '                  <a href="../../process/logout.php">Log Out</a>';
                echo '              </div>';
                echo '      </div>';
                echo '</div>';
        }
    ?>
</body>
</html>