<?php

require_once __DIR__ . '/env-loader.php';
load_env_vars();

function get_db_connection() {
    static $pdo = null;
    if ($pdo !== null) return $pdo;

    $dsn = "mysql:host=" . (getenv('DB_HOST') ?: '127.0.0.1') . ";port=" . (getenv('DB_PORT') ?: '3306') . ";dbname=" . (getenv('DB_NAME') ?: 'adinfotech_db') . ";charset=utf8mb4";
    try {
        $pdo = new PDO($dsn, getenv('DB_USER') ?: 'root', getenv('DB_PASS') !== false ? getenv('DB_PASS') : '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_TIMEOUT => 5
        ]);
        return $pdo;
    } catch (PDOException $e) {
        error_log("DB Error: " . $e->getMessage());
        return null;
    }
}
