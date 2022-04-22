<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

require_once __DIR__ . '/../../vendor/autoload.php';

$config = require_once '../config.php';
$pdo = Connection::make($config);
$query = new QueryBuilder($pdo);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query->delete("faunas", $id);
    header('Location: /32_crud_all_four/public/Fauna/index.php');
}
