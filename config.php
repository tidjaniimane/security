<?php
$host = "localhost";
$user = "root";     // your WAMP/MAMP username
$pass = "";         // your WAMP/MAMP password (empty by default)
$db   = "security";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
