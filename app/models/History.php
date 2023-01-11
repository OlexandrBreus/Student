<?php

namespace App\models;
use Core\Orm\Select;

class History
{
    public string $name = "users3";
    public function index()
    {
        $select = new Select();
        return $select->setFields(["first_name", " update_at"])->setTableName($this->name)->setGroupFields(["first_name"])->setOrderFields(["update_at"])->setLimitFields(["12", "5"])->execute();
    }
}