<?php

namespace Core\Orm;
use PDO;

class Select
{
    private PDO $connector;
    private string $tableName;
    public array $fields = ["*"];

    public function __construct()
    {
        $connector = new DBConnector();
        $this->connector = $connector->connect();

    }

    public function execute(): ?array
    {
        $sql = $this->buildQuery();
        $query = $this->connector->query($sql);
        $rows = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $rows;
    }

    private function buildQuery(): string
    {
        return "SELECT " . $this->getFieldsString() . " FROM " . $this->tableName;
    }

    private function getFieldsString(): string
    {
        $result = [];
        foreach ($this->fields as $key => $field){
           $result[] = (is_int($key)? $field: $field . " as " . $key);
        }
        return implode(",", $result);
    }

    public function setTableName($name): self
    {
        $this->tableName = $name;
        return $this;
    }

    public function setFields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }
}