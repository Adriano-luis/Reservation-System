<?php
try {
    $pdo = new PDO("mysql:dbname=booking;host=localhost", "root", "root");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit();
}
?>
