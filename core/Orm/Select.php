<?php

namespace Core\Orm;
use PDO;

class Select
{
    private PDO $connector;
    private string $tableName;
    public array $fields = ["*"];
    public array $order = [""];
    public array $group = [""];
    public array $limit = [""];
    public array $join = [];

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
        if (count($this->join) >= 1){
            return "SELECT " . $this->tableName . ".". $this->getFieldsString() . " FROM " . $this->tableName . " LEFT JOIN " . $this->getJoinTable() . " USING " . "(".$this->getJoinFields().")";
        }else{
            return "SELECT " . $this->getFieldsString() . " FROM " . $this->tableName . " GROUP BY " . $this->getGroupString() . " ORDER BY " . $this->getOrderString() . " LIMIT " . $this->getLimitString();
        }
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

    public function setOrderFields(array $order): self
    {
        $this->order = $order;
        return $this;
    }

    private function getOrderString(): string
    {
        $result = [];
        foreach ($this->order as $key => $value){
            $result[] = (is_int($key)? $value: $value . " as " . $key);
        }
        return implode(",", $result);
    }

    public function setGroupFields(array $group): self
    {
        $this->group = $group;
        return $this;
    }

    private function getGroupString(): string
    {
        $result = [];
        foreach ($this->order as $key => $value){
            $result[] = (is_int($key)? $value: $value . " as " . $key);
        }
        return implode(",", $result);
    }

    public function setLimitFields(array $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    private function getLimitString(): string
    {
        $result = [];
        foreach ($this->limit as $key => $value){
            $result[] = (is_int($key)? $value: $value . " as " . $key);
        }
        return implode(",", $result);
    }

    public function setJoinFields(array $join): self
    {
        $this->join = $join;
        return $this;
    }

    private function getJoinTable(): string
    {
        $result = [];
        foreach ($this->join as $key => $value){
            $result[] = $key;
        }
        return implode(",", $result);
    }

    private function getJoinFields():string
    {
        $result = [];
        foreach ($this->join as $value){
            $result[] = $value;
        }
        return implode(",", $result);
    }

}