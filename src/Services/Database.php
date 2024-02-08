<?php

namespace myproject\Services;

class Database{

    public static function conectar()
    {
        $config = require_once __DIR__ . '/../../config/db.config.php';

        $conn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";

        return new \PDO($conn, $config['username'], $config['password']);
    }
}