<?php
echo '<pre>';
$host = '127.0.0.1';
$db = 'postgres';
$user = 'postgres';
$password = 'postgres'; // change to your password

try {
    $dsn = "pgsql:host=$host;port=5433;dbname=$db;";
    // make a database connection
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    if ($pdo) {
        echo "Connected to the $db database successfully!";
    }
} catch (PDOException $e) {
    print_r($e);
    die($e->getMessage());
} finally {
    if ($pdo) {
        $pdo = null;
    }
}

phpinfo();
