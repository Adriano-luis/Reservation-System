<?php
try {
    $pdo = new PDO("mysql:dbname=booking;host=localhost", "Adriano", "Ad0023123@");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit();
}
?>