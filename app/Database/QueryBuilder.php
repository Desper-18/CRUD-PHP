<?php

namespace App\Database;

use PDO;

class QueryBuilder
{
    public $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll($table)
    {
        $sql = "SELECT * FROM $table";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($table, $id)
    {
        $sql = "SELECT * FROM {$table} WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $query->execute([
            ':id' => $id
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function store($table, $attributeNames, $attributeValue, $otherAttributeValue)
    {
        $sql = "INSERT INTO {$table} ($attributeNames) VALUES (?, ?)";
        $query = $this->pdo->prepare($sql);
        $query->execute([
            $attributeValue,
            $otherAttributeValue
        ]);
        $query->fetchAll();
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM {$table} WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $query->execute([
            ':id' => $id
        ]);
        $query->fetchAll();
    }

    public function update($table, $name, $column_name, $column_value, $id)
    {
        $sql = "UPDATE {$table} SET name=:name, $column_name=:column_value WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $query->execute([
            ':id' => $id,
            ':name' => $name,
            ':column_value' => $column_value,
        ]);
        $query->fetchAll();
    }
}
