<?php
$host = 'localhost';
$dbname = 'cafe_db';
$username = 'root';
$password = ''; // Default password for XAMPP is empty

try {
    // Establish database connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the database is already initialized
    $stmt = $pdo->query("SHOW TABLES LIKE 'users'");
    $tableExists = $stmt->fetch(PDO::FETCH_ASSOC);

    // If the 'users' table does not exist, run the schema.sql script
    if (!$tableExists) {
        $sql = file_get_contents(__DIR__ . '/../sql/schema.sql');
        $pdo->exec($sql);
        echo "Database initialized successfully.";
    }
} catch (PDOException $e) {
    // If the database doesn't exist, create it and re-run schema.sql
    if (strpos($e->getMessage(), "Unknown database") !== false) {
        try {
            $pdo = new PDO("mysql:host=$host", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("CREATE DATABASE `$dbname`");
            $pdo->exec("USE `$dbname`");
            
            $sql = file_get_contents(__DIR__ . '/../sql/schema.sql');
            $pdo->exec($sql);
            echo "Database created and initialized successfully.";
        } catch (PDOException $e) {
            die("Failed to create and initialize the database: " . $e->getMessage());
        }
    } else {
        die("Database connection failed: " . $e->getMessage());
    }
}
?>
