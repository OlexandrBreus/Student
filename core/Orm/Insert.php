<?php

namespace Core\Orm;
use PDO;

class Insert
{
    private array $columns;
    private array $values;
    private string $tableName;
    private PDO $connector;

    public function __construct()
    {
        $connector = new DBConnector();
        $this->connector = $connector->connect();

    }
    public function execute()
    {
        $sql = $this->buildQuery();
        $query = $this->connector->query($sql);
        return $query;
    }
    public function buildQuery(): string
    {
        //INSERT INTO table_name (column1, column2, column3, ...)
        //VALUES (value1, value2, value3, ...);
        $sql = "INSERT INTO " . $this->getTableName(). " (". $this->getColumns(). ") VALUES (". $this->getValues() . " )";
        return $sql;
    }

    public function setTableName($tableName): self
    {
        $this->tableName = $tableName;
        return $this;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    public function getColumns(): string
    {
        return implode(",", $this->columns);
    }

    public function setColumns(array $columns): self
    {
        $this->columns = $columns;
        return $this;
    }

    public function getValues(): string
    {
        $temp = [];
        foreach ($this->values as $value){
            $temp[] = "'" . $value . "'";
        }
        return implode(",", $temp);
    }

    public function setValues(array $values): self
    {
        $this->values = $values;
        return $this;
    }





}