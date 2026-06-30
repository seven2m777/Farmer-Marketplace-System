<?php

$host = "localhost";
$port = "5432";
$dbname = "farmer_marketplace";
$username = "postgres";
$password = "Samyam999%";

try {
    $pdo = new PDO( "pgsql:host=$host;port=$port;dbname=$dbname", $username, $password );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Connection Failed: " . $e->getMessage());
}