<<<<<<< HEAD
<?php
$host = getenv("localhost");
$user = getenv("root");
$pass = getenv("");
$dbname = getenv("security");

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
=======
<?php
$host = getenv("localhost");
$user = getenv("root");
$pass = getenv("");
$dbname = getenv("security");

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>

>>>>>>> 2e79f4aa0a495c35c057a944ca84c73bd06e9a20
