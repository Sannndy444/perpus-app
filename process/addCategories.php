<?php
require '../config/config.php';
session_start();

if(isset($_POST['submit'])) {
    $categoryName = $_POST['categoryName'];

    $duplicate = mysqli_query($db, "SELECT category_name FROM categories WHERE category_name = '$categoryName'");
    echo "form";
    
    if (mysqli_num_rows($duplicate) > 0) {
        echo "duplicate";
        echo "
                <script>
                    alert('Category Sudah Ada');
                    window.location.href = '../pages/admin/addCategory-page.php';
                </script>
            ";
    } else {
        $sql = "INSERT INTO categories (category_name) VALUES ('$categoryName')";
        $result = mysqli_query($db, $sql);

        if ($result) {
            echo "
                <script>
                    alert('Category Berhasil Ditambahkan');
                    window.location.href = '../pages/admin/addCategory-page.php';
                </script>
            ";
        } else {
            echo "
            <script>
                alert(Category not added);
                window.location.href = '../pages/admin/addCategory-page.php';
            </script>
            ";
        }
    }
}