<?php
$host = "localhost";
$db   = "security";
$user = "root"; // default WAMP user
$pass = "";     // default WAMP password is empty

$conn = new mysql($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
