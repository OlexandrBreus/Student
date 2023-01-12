<?php

namespace App\models;
use Core\Orm\Select;

class Pictures
{
    public string $name = "users4";
    public function index()
    {
        $select = new Select();
        return $select->setFields(["phone", " last_name"])->setTableName($this->name)->setGroupFields(["last_name"])->setLimitFields(["12, 5"])->execute();
    }
}