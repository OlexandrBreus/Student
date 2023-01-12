<?php

namespace App\models;
use Core\Orm\Select;

class History
{
    public string $name = "users3";
    public function index()
    {
        $select = new Select();
        return $select->setFields(["first_name", " update_at"])->setTableName($this->name)->setOrderFields(["first_name"])->execute();
    }
}