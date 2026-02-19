<?php
try {
    $conn = new PDO(
        "mysql:host=sql307.infinityfree.com;dbname=if0_39619029_sportsdb",
        "if0_39619029",
        "0DAnvp6X3vF9"
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // optional: force UTF-8
    $conn->exec("SET NAMES utf8mb4");
} catch (PDOException $e) {
    // in production you might log this instead of echoing
    exit("Database connection error: " . $e->getMessage());
}
