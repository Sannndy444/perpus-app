<?php
require '../config/config.php';

session_start(); // Memulai sesi untuk memastikan kita bisa mengakses data sesi yang ada

// Menghancurkan sesi
session_destroy();

// Redirect ke halaman login setelah logout
header("Location: ../pages/login-page.php");
exit;