<?php

namespace myproject\Services;

class Database{

    public static function conectar()
    {
        $config = require_once __DIR__ . '/../../config/db.config.php';

        $coon = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";

        return new \PDO($coon, $config['username'], $config['password']);
    }
}