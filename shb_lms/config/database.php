<?php
// config/database.php
require_once __DIR__ . '/../vendor/autoload.php';  // Composer pichu

// .env theke load (simple, pore dotenv use korbo)
$db_host = 'localhost';
$db_name = 'shb_lms_db';
$db_user = 'root';
$db_pass = '';  // XAMPP default

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Function to get DB instance
function db() {
    global $pdo;
    return $pdo;
}
?>
