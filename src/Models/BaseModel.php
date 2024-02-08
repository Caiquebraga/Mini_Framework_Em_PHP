<?php

namespace myproject\Models;

use myproject\Services\Database;

class BaseModel{

    protected $db;

    public function __construct(Database $database)
    {
        $this->db = $database;
    }
}