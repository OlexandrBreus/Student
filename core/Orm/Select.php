<?php

namespace Core\Orm;

class Select extends Sql
{
    public array $fields = ["*"];
    public array $order = [];
    public array $group = [];
    public array $limit = [];
    public array $join = [];


    protected function buildQuery(): string
    {
        $row = "SELECT " . $this->getFieldsString() . " FROM " . $this->tableName;
        if (!empty($this->join)) {
            $row = "SELECT " . $this->tableName . "." . $this->getFieldsString() . " FROM " . $this->tableName . " LEFT JOIN " . $this->getJoinTable() . " USING " . "(" . $this->getJoinFields() . ")";
        }
        if (!empty($this->where)){
            $row .= " WHERE " . $this->getWhere();
        }
        if (!empty($this->order)) {
            $row .= $this->getOrderString();
        }
        if (!empty($this->group)) {
            $row .= $this->getGroupString();
        }
        if (!empty($this->limit)) {
            $row .= $this->getLimitString();
        }
        return $row;
    }

    private function getFieldsString(): string
    {
        $result = [];
        foreach ($this->fields as $key => $field){
           $result[] = (is_int($key)? $field: $field . " as " . $key);
        }
        return implode(",", $result);
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
        $order = implode(",", $this->order);
        return " ORDER BY " . $order;
    }

    public function setGroupFields(array $group): self
    {
        $this->group = $group;
        return $this;
    }

    private function getGroupString(): string
    {
        $order = implode(",", $this->group);
        return " GROUP BY " . $order;
    }

    public function setLimitFields(array $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    private function getLimitString(): string
    {
        $limit = implode(",", $this->limit);
        return " LIMIT " . $limit;
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