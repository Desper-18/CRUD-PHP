<?php

namespace App\Database;

use PDO;

class Connection
{
    public static function make($config): PDO
    {
        return new PDO(
            $config['database']['dsn'] . $config['database']['name'],
            $config['database']['username'],
            $config['database']['password']
        );
    }
}
